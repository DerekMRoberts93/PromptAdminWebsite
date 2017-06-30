import pymongo
from pymongo import MongoClient
from termcolor import colored
from pprint import pprint
import sys
from bson.json_util import dumps
from auth import puser, ppwd
"""
A client for outside manipulation of the Monitoring MongoDB profiles database.
"""


client = MongoClient('mongodb://' + puser + ':' + ppwd + '@192.168.39.136:27017/monitoring')
db = client.monitoring.profiles


sel = sys.argv[1]
name = sys.argv[2]
if len(sys.argv[3]) > 1:
    passwd = sys.argv[3]
if len(sys.argv[4]) > 1:
    title = sys.argv[4]
if len(sys.argv[5]) > 1:
    devices = sys.argv[5]

def createprofile(name, passwd, title, devices):
    """
    Create a profile in the MongoDB database.
    """
    record = {"_id": name,
	      "name": name,
              "password": passwd,
              "title": title,
              "devices": [ devices ]}

    try:
    	recpost_id = db.insert_one(record).inserted_id
    except:
	print "Fail"

    print "Success"


def authenticate(name, passwd):
    """
    Compares the name and pass to the database and confirms with a success or a failure.
    """
    cursor = db.find({"_id":name})
    for result_object in cursor:
        if name == result_object['name']:
            if passwd == result_object['password']:
                print "Success"
            else:
                print "Incorrect Password"
        else:
            print "Incorrect Name"


def getdevices(name):
    """
    Return the devices associated with the given names.

    Args:
        name: The name of the profile being accessed.
    """
    cursor = db.find({"_id":name})
    for result_object in cursor:
        if result_object['devices'] == [u'None']:
            return "None"
        else:
            return result_object['devices']

def printdevices(name):
    """
    Print the devices associated with the given names.

    Args:
        name: The name of the profile being accessed.
    """
    cursor = db.find({"_id":name})
    for result_object in cursor:
        if result_object['devices'] == [u'None']:
            print "None"
        else:
            print dumps(result_object['devices'])

def findMatching(device, device_arr):
    """
    Check the array of devices to see if there is a matching element.

    Args:
        device (string): The name of the device attempting to be added.
        device_arr (array): An array of the devices attached to a profile.
    """
    matches = [x for x in device_arr if x == device]
    if matches != []:
        return True
    else:
        return False


def adddevices(name, devices):
    """
    Add the given device to a profile's devices list.

    Args:
        name: The name of the profile being accessed.
        devices: The device being added to the devices of the profile.
    """
    if getdevices(name) == "None":
        db.update({"name": name},{"$pull": {"devices": "None"}})

    if findMatching(devices, getdevices(name)) == True:
        print "<font color='red'>Device already added.</font>"
        return

    UpdateResult = db.update({"name": name},{"$push": {"devices": devices}})

    if UpdateResult['updatedExisting'] == True:
        print "<font color='green'>Added " + devices + " to your devices.</font>"
    else:
        print "<font color='red'>Error. Could not add " + device + " to your devices.</font>"

def removedevices(name, devices):
    """
    Remove the given device to a profile's devices list.

    Args:
        name: The name of the profile being accessed.
        devices: The device being removed from the devices array of the profile.
    """
    if getdevices(name) == None:
        print "<font color='red'>You have no Devices saved!</font>"
        return

    UpdateResult = db.update({"name": name},{"$pull": {"devices": devices}})

    if getdevices(name) == []:
        db.update({"name": name},{"$push": {"devices": "None"}})


    if UpdateResult['nModified'] == 1:
        print "<font color='green'>Removed " + devices + " from your devices.</font>"
    elif UpdateResult['nModified'] == 0:
        print "<font color='red'>Error. " + devices + " not found.</font>"
    else:
        print "<font color='red'>Error. Could not remove " + devices + " from your devices.</font>"


if sel == "createprofile":
    createprofile(name, passwd, title, devices)
elif sel == "authenticate":
    authenticate(name, passwd)
elif sel == "getdevices":
    print getdevices(name)
elif sel == "adddevices":
    adddevices(name, devices)
elif sel == "removedevices":
    removedevices(name, devices)
elif sel == "printdevices":
    printdevices(name)
else:
    pass

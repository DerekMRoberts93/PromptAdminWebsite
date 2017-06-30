<?php
/* This file contains configuration variables including urls, passwords and other credentials needed for accessing various nagios functions. */

//------------------------------------------- View Hosts URLs -----------------------------------------

return [
  'view_host_by_name_url'      =>  'http://localhost:5000/hoststatus?hostname=',              //View Host By Name
  'view_host_by_address_url'   =>  'http://localhost:5000/hostbyip?address=',                 //View Host By Address (IP or FQDN)
  'view_all_hosts_url'         =>  'http://localhost:5000/allhosts',                          //View All Hosts
  'view_services_by_host_url'  =>  'http://localhost:5000/servicestatushostname?hostname=',   //View Services of a host

]




?>

{{--
  This operator looks for a layout template in the resources > views folder. This particular one looks
  inside of the resources > views > layouts folder for the file 'main.blade.php'
--}}
@extends('layouts.main')



{{--
  This is a @section operator that injects code directly to the spot where
  @yield('title') is in the main.blade.php file.
--}}
@section('title')
Laravel Web Template
@stop

@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/ProxyLogin/proxylogin.js') }}"></script>
@stop
{{--
  This is a @section operator that injects code directly to the spot where
  @yield('pag-title') is in the main.blade.php file.
--}}
@section('page-title')
Call Processing Prompt Administration
@stop

{{--
  This is a @section operator that injects code directly to the spot where
  @yield('content') is in the main.blade.php file.
--}}
@section('content')




<div class="ui action input">
  <input type="text" placeholder="Search...">
  <select class="ui compact selection dropdown">
    <option selected="" value="all">All</option>
    <option value="group id">Group ID</option>
    <option value="group name">Group Name</option>
    <option value="prompt id">Prompt ID</option>
    <option value="prompt name">Prompt Name</option>
    <option value="FC">FC</option>
    <option value="FC">FO</option>
  </select>
  <div id='testbutton' type="submit" class="ui button">Search</div>
</div><br>

<div class="ui unchecked checkbox">
  <input type="checkbox" unchecked="">
  <label>Check box if using wildcards ( "%" , "-" , "\" )</label>
</div>
<br>
<br>



<table id='tableshow' class="ui compact celled definition table sortable">
  <thead class="full-width">
    <tr>
      <th class="sortable">Group ID</th>
      <th class="sortable">Group Name</th>
      <th class="sortable">FC</th>
      <th class="sortable">FO</th>
      <th class="sortable">Count</th>
      <th class="sortable">Pin</th>
      <th>Edit</th>
      <th>Show Prompt</th>
    </tr>
  </thead>

  <tbody id='tbody'>
    <tr>
      <td>20020</td>
      <td>20020_MuseumPC</td>
      <td class="collapsing">
        <div class="ui fitted slider checkbox">
          <input type="checkbox"> <label></label>
        </div>
      </td>
      <td class="collapsing">
        <div class="ui fitted slider checkbox">
          <input type="checkbox"> <label></label>
        </div>
      </td>
      <td>4</td>
      <td>142106</td>
      <td> <button id="editPrompt" class="button">Edit Prompt</button>
	  </td>
      <td> <button id="showPrompt" class="button">Show Prompts</button>
      </td>
    </tr>   
  </tbody>

 <tfoot>
    <tr>
        <td colspan="8" style="text-align: left; " rowspan="1">
            <span class="tooltip">
                <input type="text" id="newAppId" name="newAppName" value="" placeholder="Group ID" style="width: 12.5%;" class="textInput">
                    <!-- <div> -->
                        <!-- <div class="tooltipContent">Must be 5 digits. This cannot be blank</div> -->
                 	<!-- </div> -->
            </span>
            <span class="tooltip">
                <input type="text" id="newAppName" name="newAppName" value="" placeholder="Group Name" style="width: 25%;" class="textInput">
                    <!-- <div> -->
                        <!-- <div class="tooltipContent">Limit: 64 characters. This cannot be blank</div> -->
                    <!-- </div> -->
            </span>
            <span class="tooltip">
                <input type="text" id="newAppInitialPromptId" name="initialPromptId" value="" placeholder="Prompt ID" style="width: 12.5%;" class="textInput">
                    <!-- <div> -->
                        <!-- <div class="tooltipContent">Must be 5 digits. This cannot be blank</div> -->
                    <!-- </div> -->
            </span>
            <span class="tooltip">
                <input type="text" id="newAppInitialPromptName" name="initialPromptName" value="" placeholder="Prompt Name" style="width: 25%;" class="textInput">
                    <!-- <div> -->
                        <!-- <div class="tooltipContent">Limit: 64 characters. This cannot be blank</div> -->
                    <!-- </div> -->
            </span>
            <span class="tooltip">
                <input type="text" id="newAppPassCode" name="newPassCode" value="" placeholder="Passcode" style="width: 12.5%;" class="textInput">
                    <!-- <div> -->
                        <!-- <div class="tooltipContent">Must be 6 digits. This cannot be blank</div> -->
                    <!-- </div> -->
            </span>
                <button id="addNewApp" class="button">New Group</button>

        </td>
    </tr>
</tfoot>
</table>





@stop


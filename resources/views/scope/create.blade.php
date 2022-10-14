@extends('layouts.app') 
@section('content')

<div class="container-fluid ms-scope">
	
    <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Area</label>
                        <select class="form-control customSelect" id="areaSelect">
                            <option disabled selected>Select or enter new area</option>
                            <option >Boardroom(s)</option>
                            <option >Cafeteria(s)</option>
                            <option >Carpark(s)</option>
                            <option >Corridoor(s)</option>
                            <option >Changeroom(s)</option>
                            <option >Creche</option>
                            <option >Art Room(s)</option>
                            <option >Dance Room(s)</option>
                            <option >External Area(s)</option>
                            <option >Gym(s)</option>
                            <option >Hall(s)</option>
                            <option >Kitchen(s)</option>
                            <option >Library(s)</option>
                            <option >Main Reception/Entrance</option>
                            <option >Meeting Room(s)</option>
                            <option >Storeroom(s)</option>
                            <option >Metal Work Room(s)</option>
                            <option >Music Room(s)</option>
                            <option >Playground(s)</option>
                            <option >Staff Room(s)</option>
                            <option >Stairwell(s)</option>
                            <option >Classroom(s)</option>
                            <option >Textiles Room(s)</option>
                            <option >Training Room(s)</option>
                            <option >Toilet(s)</option>
                            <option >Wood Work Room(s)</option>
                            <option >Other</option>
                        </select>
                        <small><p>Type name of area to be cleaned</p></small>
                    </div>
                   
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Suggested Areas</label>
                        <select class="form-control select2" placeholder="" data-toggle="select2" id="suggestedSelect" onchange="onChangeSuggestedAreas()">
                            <option disabled selected>Please Select...</option>
                            <option >Boardroom(s)</option>
                            <option >Cafeteria(s)</option>
                            <option >Carpark(s)</option>
                            <option >Corridoor(s)</option>
                            <option >Changeroom(s)</option>
                            <option >Creche</option>
                            <option >Art Room(s)</option>
                            <option >Dance Room(s)</option>
                            <option >External Area(s)</option>
                            <option >Gym(s)</option>
                            <option >Hall(s)</option>
                            <option >Kitchen(s)</option>
                            <option >Library(s)</option>
                            <option >Main Reception/Entrance</option>
                            <option >Meeting Room(s)</option>
                            <option >Storeroom(s)</option>
                            <option >Metal Work Room(s)</option>
                            <option >Music Room(s)</option>
                            <option >Playground(s)</option>
                            <option >Staff Room(s)</option>
                            <option >Stairwell(s)</option>
                            <option >Classroom(s)</option>
                            <option >Textiles Room(s)</option>
                            <option >Training Room(s)</option>
                            <option >Toilet(s)</option>
                            <option >Wood Work Room(s)</option>
                            <option >Other</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mt-1">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="text-nowrap">Cleaning Options for Area</label>
                        <div class="input-group">
                            <input type="text" id="cleanTextBox" name="cleanTextBox" class="form-control" placeholder="Please type cleaning option...">
                            <div class="input-group-append">
                                <button class="btn btn-dark" onclick="onClickAddCleaningCheckBox()">Add</button>
                            </div>
                        </div>
                        <small><p>Create/select cleaning options(s) required for the above area</p></small>
                    </div>
                
                <!-- <div class="row mt-2" id="cleaningOptions">
                    <div class="col-md-3 mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="cleanCheck" name="cleanCheck" class="custom-control-input"
                            data-element="clean"
                            data-name="Clean">
                        <label class="custom-control-label" for="cleanCheck"> Clean </label>
                    </div>
                    </div>
                    <div class="col-md-3 mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="cobwebCheck" name="cobwebCheck" class="custom-control-input"
                            data-element="cobweb"
                            data-name="Cobweb Removal">
                        <label class="custom-control-label" for="cobwebCheck"> Cobweb Removal </label>
                    </div>
                    </div>
                    <div class="col-md-3 mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="task3" name="customRadio2" class="custom-control-input">
                        <label class="custom-control-label" for="task3"> Consumables </label>
                    </div>
                    </div>
                    <div class="col-md-3 mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="task4" name="customRadio2" class="custom-control-input">
                        <label class="custom-control-label" for="task4"> Disinfect </label>
                    </div>
                    </div>
                    <div class="col-md-3 mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="task5" name="customRadio2" class="custom-control-input">
                        <label class="custom-control-label" for="task5"> Dusting </label>
                    </div>
                    </div>
                    <div class="col-md-3 mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="task6" name="customRadio2" class="custom-control-input">
                        <label class="custom-control-label" for="task6"> Empty Bins </label>
                    </div>
                    </div>
                    <div class="col-md-3 mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="task7" name="customRadio2" class="custom-control-input">
                        <label class="custom-control-label" for="task7"> Full Squeegee </label>
                    </div>
                    </div>
                    <div class="col-md-3 mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="task8" name="customRadio2" class="custom-control-input">
                        <label class="custom-control-label" for="task8"> Mop </label>
                    </div>
                    </div>
                    <div class="col-md-3 mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="task9" name="customRadio2" class="custom-control-input">
                        <label class="custom-control-label" for="task9"> Polish </label>
                    </div>
                    </div>
                    <div class="col-md-3 mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="task10" name="customRadio2" class="custom-control-input">
                        <label class="custom-control-label" for="task10"> Remove </label>
                    </div>
                    </div>
                    <div class="col-md-3 mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="task11" name="customRadio2" class="custom-control-input">
                        <label class="custom-control-label" for="task11"> Scrub </label>
                    </div>
                    </div>
                    <div class="col-md-3 mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="task12" name="customRadio2" class="custom-control-input">
                        <label class="custom-control-label" for="task12"> Spot Clean </label>
                    </div>
                    </div>
                    <div class="col-md-3 mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="task13" name="customRadio2" class="custom-control-input">
                        <label class="custom-control-label" for="task13"> Sweeping </label>
                    </div>
                    </div>
                    <div class="col-md-3 mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="task14" name="customRadio2" class="custom-control-input">
                        <label class="custom-control-label" for="task14"> Vaccum </label>
                    </div>
                    </div>
                    <div class="col-md-3 mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="task15" name="customRadio2" class="custom-control-input">
                        <label class="custom-control-label" for="task15"> Wet Wiping </label>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="task16" name="customRadio2" class="custom-control-input">
                        <label class="custom-control-label" for="task16"> Change Bin Liners/Sanitise Bins </label>
                    </div>
                    </div>
                    <div class="col-md-3 mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="checkbox" id="task17" name="customRadio2" class="custom-control-input">
                        <label class="custom-control-label" for="task17"> Other </label>
                    </div>
                    </div>
                </div> -->
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Suggested Cleaning Options</label>
                        <select class="form-control select2" placeholder="" data-toggle="select2" id="suggestedCleaningOptions" onchange="onChangeCleaningOptions()">
                            <option disabled selected>Please Select...</option>
                            <option >Clean</option>
                            <option >Cobweb Removal</option>
                            <option >Consumables</option>
                            <option >Disinfect</option>
                            <option >Dusting</option>
                            <option >Empty Bins</option>
                            <option >Full Squeegee</option>
                            <option >Mop</option>
                            <option >Polish</option>
                            <option >Remove</option>
                            <option >Scrub</option>
                            <option >Spot Clean</option>
                            <option >Sweeping</option>
                            <option >Vaccum</option>
                            <option >Wet Wiping</option>
                            <option >Change Bin Liners/Sanitise Bins</option>
                            <option >Other</option>
                            
                        </select>
                    </div>
                </div>
                
            </div>
            <div class="row mt-2" id="cleaningOptions">

            </div>
        </div>
    </div>

    <div id="cleanItems"></div>


    <!-- <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <h3 class="fs-1" for="">Clean:</h3>
                    <select id="cleanSelect" class="form-control select2" data-toggle="select2">
                        <option  disabled selected>Please Select...</option>
                        <option >Check and clean ledges, walls, rails, columns</option>
                        <option >Check & clean all walls, skirting, doors, & door frames</option>
                        <option >Check & clean glass and panel bar front</option>
                    </select>
                    <small>Please select any cleaning tasks required from the above dropdown list</small>
                </div>
                <div class="col-md-3">
                    <label for="" class="mb-0 mt-3">Frequency:</label>
                    <select id="cleanFrequencySelect" class="form-control select2" data-toggle="select2">
                        <option disabled selected>Please Select...</option>
                        <option >Annually</option>
                        <option >Quarterly</option>
                        <option >Monthly</option>
                        <option >Fortnightly</option>
                        <option >Weekly</option>
                        <option >Daily</option>
                        <option >Weekdays</option>
                        <option >Weekends</option>
                        <option >Mondays</option>
                        <option >Tuesdays</option>
                        <option >Wednesdays</option>
                        <option >Thursdays</option>
                        <option >Fridays</option>
                        <option >Saturdays</option>
                        <option >Sundays</option>
                        <option >Continual</option>
                        <option >Other</option>
                    </select>
                    <small class="text-nowrap">Please select frequency cleaning tasks is required</small>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="" class="mb-0 mt-3" style="visibility: hidden;">Time</label>
                        <input type="text" id="cleanTimeInput" class="form-control" placeholder="00.00 – 00.00 AM/PM " >
                    </div>
                </div>
                <div class="col-md-1 d-flex align-items-center mt-3">
                    <button class="btn btn-dark" onclick="addData('clean')">ADD</button>
                </div>
            </div>
            <div class="row pl-3" style="padding-right:7rem" id="cleanRow"></div>
        </div>
    </div> -->

    <!-- <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <h3 class="fs-1" for="">Bins & Rubbish:</h3>
                    <select id="binSelect" class="form-control select2" data-toggle="select2">
                        <option  disabled selected>Please Select...</option>
                        <option >Basins & Tapware (Clean)</option>
                        <option >Consumables (Soap)</option>
                        <option >Consumables (Toilet Paper)</option>
                        <option >Consumables (Hand Towel)</option>
                        <option >Glass Windows (Clean)</option>
                        <option >Handrails (Polish/Disinfect)</option>
                        <option >Showers (Disinfect/Clean)</option>
                        <option >Shower Glass</option>
                        <option >Toilets (Disinfect/Clean)</option>
                        <option >Wall Tiles ((Disinfect/Clean)</option>
                        <option >Other</option>
                    </select>
                    <small>Please select any cleaning tasks required from the above dropdown list</small>
                </div>
                <div class="col-md-3">
                    <label for="" class="mb-0 mt-3">Frequency:</label>
                    <select id="binFrequencySelect" class="form-control select2" data-toggle="select2">
                        <option  disabled selected>Please Select...</option>
                        <option >Annually</option>
                        <option >Quarterly</option>
                        <option >Monthly</option>
                        <option >Fortnightly</option>
                        <option >Weekly</option>
                        <option >Daily</option>
                        <option >Weekdays</option>
                        <option >Weekends</option>
                        <option >Mondays</option>
                        <option >Tuesdays</option>
                        <option >Wednesdays</option>
                        <option >Thursdays</option>
                        <option >Fridays</option>
                        <option >Saturdays</option>
                        <option >Sundays</option>
                        <option >Continual</option>
                        <option >Other</option>
                    </select>
                    <small class="text-nowrap">Please select frequency cleaning tasks is required</small>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="" class="mb-0 mt-3" style="visibility: hidden;">Time</label>
                        <input type="text" id="binTimeInput" class="form-control" placeholder="00.00 – 00.00 AM/PM " >
                    </div>
                </div>
                <div class="col-md-1 d-flex align-items-center mt-3">
                    <button class="btn btn-dark" onclick="addData('bin')">ADD</button>
                </div>
            </div>
            <div class="row pl-3" style="padding-right:7rem" id="binRow"></div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <h3 class="fs-1" for="">Mop:</h3>
                    <select id="mopSelect" class="form-control select2" data-toggle="select2">
                        <option  disabled selected>Please Select...</option>
                        <option >External Window Cleaning</option>
                        <option >Fogging Sanitisation</option>
                        <option >Machine Buff (Floors)</option>
                        <option >PPE Required</option>
                        <option >Pressure Cleaning</option>
                        <option >Touch Point Sanitsation</option>
                        <option >Sanitary Disposalo</option>
                        <option >Sharps Disposal</option>
                        <option >Steam Clean</option>
                        <option >Strip & Seal</option>
                        <option >Waste Management</option>
                        <option >Other</option>
                    </select>
                    <small>Please select any cleaning tasks required from the above dropdown list</small>
                </div>
                <div class="col-md-3">
                    <label for="" class="mb-0 mt-3">Frequency:</label>
                    <select id="mopFrequencySelect" class="form-control select2" data-toggle="select2">
                        <option  disabled selected>Please Select...</option>
                        <option >Annually</option>
                        <option >Quarterly</option>
                        <option >Monthly</option>
                        <option >Fortnightly</option>
                        <option >Weekly</option>
                        <option >Daily</option>
                        <option >Weekdays</option>
                        <option >Weekends</option>
                        <option >Mondays</option>
                        <option >Tuesdays</option>
                        <option >Wednesdays</option>
                        <option >Thursdays</option>
                        <option >Fridays</option>
                        <option >Saturdays</option>
                        <option >Sundays</option>
                        <option >Continual</option>
                        <option >Other</option>
                    </select>
                    <small class="text-nowrap">Please select frequency cleaning tasks is required</small>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="" class="mb-0 mt-3" style="visibility: hidden;">Time</label>
                        <input type="text" id="mopTimeInput" class="form-control" placeholder="00.00 – 00.00 AM/PM " >
                    </div>
                </div>
                <div class="col-md-1 d-flex align-items-center mt-3">
                    <button class="btn btn-dark" onclick="addData('mop')">ADD</button>
                </div>
            </div>
            <div class="row pl-3" style="padding-right:7rem" id="mopRow"></div>
        </div>
    </div> -->
   
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <div class=" ms-float-right"> <a href="all-scopes.html" class="btn btn-info ms-mt-2 ms-block">Save Scope</a> </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
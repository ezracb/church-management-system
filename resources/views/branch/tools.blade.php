@extends('layouts.app')

@section('title') Head Office @endsection

@section('link')
<!--X-editable [ OPTIONAL ]-->
    <link href="{{ URL::asset('plugins/x-editable/css/bootstrap-editable.css')}}" rel="stylesheet">
    <!--TypeaheadJS [ OPTIONAL ]-->
    <link href="{{ URL::asset('plugins/x-editable/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css')}}" rel="stylesheet">
    <!--Address [ OPTIONAL ]-->
    <link href="{{ URL::asset('plugins/x-editable/inputs-ext/address/address.css')}}" rel="stylesheet">

<link href="{{ URL::asset('css/stylemashable.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{URL::asset('css/icofont.min.css')}}">
@endsection

@section('content')
<!-- <link href="{{ URL::asset('plugins/datatables/media/css/dataTables.bootstrap.css') }}" rel="stylesheet">
<link href="{{ URL::asset('plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('plugins/datatables/semantic.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('plugins/datatables/dataTables.semanticui.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('plugins/datatables/buttons.semanticui.min.css') }}" rel="stylesheet"> -->
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Head office</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
            <li>
                <a href="forms-general.html#">
                    <i class="demo-pli-home"></i>
                </a>
            </li>
            <li>
                <a href="forms-general.html#">Admin Tools</a>
            </li>
            <li class="active">Tools</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
      <div class="row">
        <div class="table table-striped table-bordered"  >
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
          @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
          @endif
        </div>
        <div class="">
            <div class="panel" style="overflow:scroll; background-color: #e8ddd3;">
                <!-- <div class="panel-heading">
                    <h3 class="panel-title">Add Collection Type</h3>
                </div> -->
                <!--Block Styled Form -->
                <!--===================================================-->
      			<div class="panel-body">
              <div class="col-12">

                <div class="sub-title">Tabs</div>
                  <!---------------------------------->
					    <div class="panel">
					         <div class="panel-body">
					             <div class="pad-btm form-inline">
					                <div class="row">
					                    <div class="col-sm-6 table-toolbar-left">
					                        <p>Click to edit</p>
					                    </div>
					                    <div class="col-sm-6 table-toolbar-right">
					                        <div class="checkbox mar-rgt">
					                             <input id="demo-editable-auto-open" class="magic-checkbox" type="checkbox">
					                             <label for="demo-editable-auto-open">Auto-Open Next Field</label>
					                        </div>
					                        <button id="demo-editable-enable" class="btn btn-purple"><i class="fa fa-edit"></i>Edit</button>
					                    </div>
					                </div>
					            </div>

					            <table id="demo-editable-table" class="table table-bordered">
					                <tbody>
					                    <tr>
					                        <td width="35%">Sms Api</td>
					                        <td width="65%"><a href="#" id="smsapi"></a></td>
					                    </tr>
                              <tr>
					                        <td width="35%">Branch Name</td>
					                        <td width="65%"><a href="#" id="branchname"></a></td>
					                    </tr>
                              <tr>
					                        <td width="35%">Branch Logo</td>
					                        <td width="65%"><a href="#" id="branchlogo"></a></td>
					                    </tr>
					                    <tr>
					                        <td>Empty text field, required</td>
					                        <td><a href="#" id="demo-editable-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a></td>
					                    </tr>
					                    <tr>
					                        <td>Sex</td>
					                        <td><a href="#" id="demo-editable-sex" data-type="select" data-pk="1" data-value="" data-title="Select currency Symbol"></a></td>
					                    </tr>
					                    <tr>
					                        <td>Branch Currency Symbol</td>
					                        <td><a href="#" id="currency" data-type="select" data-pk="1" data-source="{{route('option.test')}}" data-title="Select currency Symbol"></a></td>
					                    </tr>
					                    <tr>
					                        <td>Select, error while loading</td>
					                        <td><a href="#" id="demo-editable-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a></td>
					                    </tr>
					                    <tr>
					                        <td>Combodate (date)</td>
					                        <td><a href="#" id="demo-editable-dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a></td>
					                    </tr>
					                    <tr>
					                        <td>Combodate (datetime)</td>
					                        <td><a href="#" id="demo-editable-event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1"  data-title="Setup event date and time"></a></td>
					                    </tr>
					                    <tr>
					                        <td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
					                        <td><a href="#" id="demo-editable-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></td>
					                    </tr>
					                    <tr>
					                        <td>Twitter typeahead.js</td>
					                        <td><a href="#" id="demo-editable-state2" data-type="typeaheadjs" data-pk="1" data-placement="right" data-title="Start typing State.."></a></td>
					                    </tr>
					                    <tr>
					                        <td>Checklist</td>
					                        <td><a href="#" id="demo-editable-fruits" data-type="checklist" data-value="2,3" data-title="Select fruits"></a></td>
					                    </tr>
					                    <tr>
					                        <td>Custom input, several fields</td>
					                        <td><a href="#" id="demo-editable-address" data-type="address" data-pk="1" data-title="Please, fill address"></a></td>
					                    </tr>
					                </tbody>
					            </table>
					     </div>
					    <!---------------------------------->
                </div>
              </div>
      	    </div>
                <!--===================================================-->
                <!--End Block Styled Form -->
          </div>
        </div>
      </div>
    </div>
    <!--===================================================-->
    <!--End page content-->

</div>

<!--===================================================-->
<!--END CONTENT CONTAINER-->
@endsection

@section('js')
<!--jQuery Mockjax [ OPTIONAL ]-->
   <script src="{{ URL::asset('plugins/x-editable/inputs-ext/mockjax/jquery.mockjax.js')}}"></script>
   <!--MomentJS [ OPTIONAL ]-->
   <script src="{{ URL::asset('plugins/momentjs/moment.min.js')}}"></script>
   <!--X-editable [ OPTIONAL ]-->
   <script src="{{ URL::asset('plugins/x-editable/js/bootstrap-editable.min.js')}}"></script>
   <!--TypeaheadJS [ OPTIONAL ]-->
   <script src="{{ URL::asset('plugins/x-editable/inputs-ext/typeaheadjs/lib/typeahead.js')}}"></script>
   <!--TypeaheadJS [ OPTIONAL ]-->
   <script src="{{ URL::asset('plugins/x-editable/inputs-ext/typeaheadjs/typeaheadjs.js')}}"></script>
   <!--Address [ OPTIONAL ]-->
   <script src="{{ URL::asset('plugins/x-editable/inputs-ext/address/address.js')}}"></script>

<script>
var dt = {}
$.ajax({url: "{{route('option.branch.get')}}"})
.done((res) => {
  if (res.status) {
    json = res.text
    json.forEach((index) => {
      dt[index.name] = index.value
    })
    console.log(dt);
  }
})
.fail((e) => {console.log(e);})
$(document).ready( () => {


      // datas
      var dT = {sex: {male: {value: 1, text: 'Male'}, female: { value: 1, text: "Female"} } }
			//defaults
			$.fn.editable.defaults.url = "{{route('option.branch.post')}}";
      // default params e.g token
      $.fn.editable.defaults.params = function (params) {
        params._token = "{{csrf_token()}}";
        return params;
      };

			//enable / disable
			$("#demo-editable-enable").click(function() {
			    $("#demo-editable-table .editable").editable("toggleDisabled");

			});

			//editables
			$("#smsapi").editable({
			    type: "text",
			    pk: 1,
			    name: "smsapi",
          value: dt.smsapi,
			    title: "Enter Your SMS Api Url"
			});

      //editables
			$("#branchname").editable({
        type: "text",
        pk: 1,
        name: "branchname",
        value: 'dt.branchname',
        title: "Enter Your Branchname"
			});

      //editables
			$("#branchlogo").editable({
        type: "text",
        pk: 1,
        name: "logo",
        // value: 'dt.branchlogo',
        title: "Upload Your Branch Logo",
        display: function (value, sourceData) {
          $(this).html(`<img class="d-flex mr-3 img-circle img-60 img-thumbnail" src="{{url('/images/')}}/church-logo.png" alt="{{'$member->firstname'}} image">`)
        }
			});

			$("#demo-editable-firstname").editable({
			    validate: function(value) {
			       if($.trim(value) == "") return "This field is required";
			    }
			});

			$("#demo-editable-sex").editable({
			    prepend: "not selected",
			    source: [
			        dT.sex.male,
			        dT.sex.female
			    ],
			    display: function(value, sourceData) {
			         var colors = {"": "gray", 1: "green", 2: "blue"},
			             elem = $.grep(sourceData, function(o){return o.value == value;});

			         if(elem.length) {
			             $(this).text(elem[0].text).css("color", colors[value]);
			         } else {
			             $(this).empty();
			         }
			    }
			});

			$("#demo-editable-status").editable();

			$("#currency").editable({
			    // showbuttons: false,
          value: '₦',
			});

			$("#demo-editable-vacation").editable({
			    datepicker: {
			        todayBtn: "linked"
			    }
			});

			$("#demo-editable-dob").editable();

			$("#demo-editable-event").editable({
			    placement: "right",
			    combodate: {
			        firstItem: "name"
			    }
			});

			$("#demo-editable-meeting_start").editable({
			    format: "yyyy-mm-dd hh:ii",
			    viewformat: "dd/mm/yyyy hh:ii",
			    validate: function(v) {
			       if(v && v.getDate() == 10) return "Day cant be 10!";
			    },
			    datetimepicker: {
			       todayBtn: "linked",
			       weekStart: 1
			    }
			});

			$("#demo-editable-comments").editable({
			    showbuttons: "bottom"
			});

			$("#demo-editable-note").editable();
			$("#demo-editable-pencil").click(function(e) {
			    e.stopPropagation();
			    e.preventDefault();
			    $("#demo-editable-note").editable("toggle");
			});

			$("#demo-editable-state").editable({
			    source: ["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]
			});

			$("#demo-editable-state2").editable({
			    value: "California",
			    typeahead: {
			        name: "state",
			        local: ["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]
			    }
			});

			$("#demo-editable-fruits").editable({
			   pk: 1,
			   limit: 3,
			   source: [
			    {value: 1, text: "banana"},
			    {value: 2, text: "peach"},
			    {value: 3, text: "apple"},
			    {value: 4, text: "watermelon"},
			    {value: 5, text: "orange"}
			   ]
			});


			$("#demo-editable-address").editable({
			    value: {
			        city: "Moscow",
			        street: "Lenina",
			        building: "12"
			    },
			    validate: function(value) {
			        if(value.city == "") return "city is required!";
			    },
			    display: function(value) {
			        if(!value) {
			            $(this).empty();
			            return;
			        }
			        var html = "<b>" + $("<div>").text(value.city).html() + "</b>, " + $("<div>").text(value.street).html() + " st., bld. " + $("<div>").text(value.building).html();
			        $(this).html(html);
			    }
			});

			$("#demo-editable-table .editable").on("hidden", function(e, reason){
			    if(reason === "save" || reason === "nochange") {
			        var $next = $(this).closest("tr").next().find(".editable");
			        if($("#demo-editable-auto-open").is(":checked")) {
			            setTimeout(function() {
			                $next.editable("show");
			            }, 300);
			        } else {
			            $next.focus();
			        }
			    }
			});

  // if ($.fn.dataTable.isDataTable('.datatable')) {
  //   table = $('.datatable').DataTable()
  // } else {
  //   /*$('.datatable').DataTable({
  //     dom: 'Bfrtip',
  //     buttons: [
  //       'copy', 'csv', 'excel', 'pdf', 'print'
  //     ]
  //   });*/
  //
  //   var table = $('.datatable').DataTable({
  //     dom: 'Bfrtip',
  //     lengthChange: false,
  //     buttons: ['copy', 'excel', 'pdf', 'colvis']
  //   });
  //
  //   table.buttons().container()
  //     .appendTo($('div.eight.column:eq(0)', table.table().container()));
  //
  // }
});
</script>
@endsection

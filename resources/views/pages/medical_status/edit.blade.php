<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('editMedicalStatus'); //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="edit" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto  back-btn-col" >
                    <a class="back-btn btn " href="{{ url()->previous() }}" >
                        <i class="material-icons">arrow_back</i>                                
                         
                    </a>
                </div>
                <div class="col col-md-auto  " >
                    <div class=" h5 font-weight-bold text-primary" >
                        {{ __('editMedicalStatus') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div  class="" >
        <div class="container">
            <div class="row ">
                <div class="col-md-9 comp-grid " >
                    <?php Html::display_page_errors($errors); ?>
                    <div  class="card-1 border rounded page-content" >
                        <!--[form-start]-->
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("medical_status/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="diagnosis">{{ __('diagnosis') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-diagnosis-holder" class=" ">
                                            <textarea placeholder="{{ __('enterDiagnosis') }}" id="ctrl-diagnosis" data-field="diagnosis"  rows="5" name="diagnosis" class=" form-control"><?php  echo $data['diagnosis']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="solution">{{ __('solution') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-solution-holder" class=" ">
                                            <textarea placeholder="{{ __('enterSolution') }}" id="ctrl-solution" data-field="solution"  rows="5" name="solution" class=" form-control"><?php  echo $data['solution']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cost">{{ __('cost') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cost-holder" class=" ">
                                            <input id="ctrl-cost" data-field="cost"  value="<?php  echo $data['cost']; ?>" type="number" placeholder="{{ __('enterCost') }}" step="0.1"  name="cost"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="children_id">{{ __('childrenId') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-children_id-holder" class=" ">
                                            <input id="ctrl-children_id" data-field="children_id"  value="<?php  echo $data['children_id']; ?>" type="text" placeholder="{{ __('enterChildrenId') }}"  name="children_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="remaining">{{ __('remaining') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-remaining-holder" class=" ">
                                            <input id="ctrl-remaining" data-field="remaining"  value="<?php  echo $data['remaining']; ?>" type="number" placeholder="{{ __('enterRemaining') }}" step="0.1"  name="remaining"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="date">{{ __('date') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-date-holder" class="input-group ">
                                            <input id="ctrl-date" data-field="date" class="form-control datepicker  datepicker" value="<?php  echo $data['date']; ?>" type="datetime"  name="date" placeholder="{{ __('enterDate') }}" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-ajax-status"></div>
                        <!--[form-content-end]-->
                        <!--[form-button-start]-->
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">
                            {{ __('update') }}
                            <i class="material-icons">send</i>
                            </button>
                        </div>
                        <!--[form-button-end]-->
                    </form>
                    <!--[form-end]-->
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
<!-- Page custom css -->
@section('pagecss')
<style>

</style>
@endsection
<!-- Page custom js -->
@section('pagejs')
<script>
    <!--pageautofill-->
$(document).ready(function(){
	// custom javascript | jquery codes
});

</script>
@endsection

<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php 
    $pageTitle = __('home'); // set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<div>
    <div  class="mb-3" >
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid " >
                </div>
                <div class="col-12 comp-grid " >
                    <div class=" ">
                        <?php
                            $params = [ 'limit' => 10]; //new query param
                            $query = array_merge(request()->query(), $params);
                            $queryParams = http_build_query($query);
                            $url = url("children/index?$queryParams");
                        ?>
                        <div class="ajax-inline-page" data-url="{{ $url }}" >
                            <div class="ajax-page-load-indicator">
                                <div class="text-center d-flex justify-content-center load-indicator">
                                    <span class="loader mr-3"></span>
                                    <span class="fw-bold">{{ __('loading') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- Page custom css -->
@section('pagecss')
<style>
</style>
@endsection
<!-- Page custom js -->
@section('pagejs')
<script>
    $(document).ready(function(){
    // custom javascript | jquery codes
    });
</script>
@endsection

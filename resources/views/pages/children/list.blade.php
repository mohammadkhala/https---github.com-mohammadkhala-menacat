<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $field_name = request()->segment(3);
    $field_value = request()->segment(4);
    $total_records = $records->total();
    $limit = $records->perPage();
    $record_count = count($records);
    $pageTitle = __('children'); //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="list" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3" >
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">
                <div class="col col-md-auto  " >
                    <div class=" h5 font-weight-bold text-primary" >
                        {{ __('children') }}
                    </div>
                </div>
                <div class="col-md-auto  " >
                    <a  class="btn btn-primary" href="<?php print_link("children/add", true) ?>" >
                    <i class="material-icons">add</i>                               
                    {{ __('addNewChildren') }} 
                </a>
            </div>
            <div class="col-md-3  " >
                <!-- Page drop down search component -->
                <form  class="search" action="{{ url()->current() }}" method="get">
                    <input type="hidden" name="page" value="1" />
                    <div class="input-group">
                        <input value="<?php echo get_value('search'); ?>" class="form-control page-search" type="text" name="search"  placeholder="{{ __('search') }}" />
                        <button class="btn btn-primary"><i class="material-icons">search</i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    }
?>
<div  class="" >
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-12 comp-grid " >
                <?php Html::display_page_errors($errors); ?>
                <div  class=" page-content" >
                    <div id="children-list-records">
                        <div class="row gutter-lg ">
                            <div class="col">
                                <div id="page-main-content" class="table-responsive">
                                    <?php Html::page_bread_crumb("/children/", $field_name, $field_value); ?>
                                    <table class="table table-hover table-striped table-sm text-left">
                                        <thead class="table-header ">
                                            <tr>
                                                <th class="td-" > </th><th class="td-class" > {{ __('class') }}</th>
                                                <th class="td-image <?php echo (get_value('orderby') == 'image' ? 'sortedby' : null); ?>" >
                                                <?php Html :: get_field_order_link('image', __('image'), ''); ?>
                                                </th>
                                                <th class="td-gender" > {{ __('gender') }}</th>
                                                <th class="td-address" > {{ __('address') }}</th>
                                                <th class="td-date_of_birth" > {{ __('dateOfBirth') }}</th>
                                                <th class="td-name" > {{ __('name') }}</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            if($total_records){
                                        ?>
                                        <tbody class="page-data">
                                            <!--record-->
                                            <?php
                                                $counter = 0;
                                                foreach($records as $data){
                                                $rec_id = ($data['id'] ? urlencode($data['id']) : null);
                                                $counter++;
                                            ?>
                                            <tr>
                                                <!--PageComponentStart-->
                                                <td class="td-masterdetailbtn">
                                                    <a data-page-id="children-detail-page" class="btn btn-sm btn-secondary open-master-detail-page" href="<?php print_link("children/masterdetail/$data[id]"); ?>">
                                                    <i class="material-icons">more_vert</i> 
                                                </a>
                                            </td>
                                            <td class="td-class">
                                                <span  data-source='<?php print_link('componentsdata/class_option_list'); ?>' 
                                                data-value="<?php echo $data['class']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("children/edit/" . urlencode($data['id'])); ?>" 
                                                data-name="class" 
                                                data-title="Enter Class" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['class'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-image">
                                                <?php 
                                                    Html :: page_img($data['image'], '50px', '50px', "medium", 1); 
                                                ?>
                                            </td>
                                            <td class="td-gender">
                                                <span  data-source='<?php echo json_encode_quote(Menu::gender()); ?>' 
                                                data-value="<?php echo $data['gender']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("children/edit/" . urlencode($data['id'])); ?>" 
                                                data-name="gender" 
                                                data-title="Enter Gender" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="radiolist" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['gender'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-address">
                                                <span  data-source='<?php print_link('componentsdata/class_option_list'); ?>' 
                                                data-value="<?php echo $data['address']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("children/edit/" . urlencode($data['id'])); ?>" 
                                                data-name="address" 
                                                data-title="Enter Address" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['address'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-date_of_birth">
                                                <span  data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-source='<?php print_link('componentsdata/class_option_list'); ?>' 
                                                data-value="<?php echo $data['date_of_birth']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("children/edit/" . urlencode($data['id'])); ?>" 
                                                data-name="date_of_birth" 
                                                data-title="Enter Date Of Birth" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['date_of_birth'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-name">
                                                <a href="<?php print_link("children/view/$data[id]") ?>"><?php echo $data['name']; ?></a>
                                            </td>
                                            <!--PageComponentEnd-->
                                        </tr>
                                        <?php 
                                            }
                                        ?>
                                        <!--endrecord-->
                                    </tbody>
                                    <tbody class="search-data"></tbody>
                                    <?php
                                        }
                                        else{
                                    ?>
                                    <tbody class="page-data">
                                        <tr>
                                            <td class="bg-light text-center text-muted animated bounce p-3" colspan="1000">
                                                <i class="material-icons">block</i> {{ __('noRecordFound') }}
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                        }
                                    ?>
                                </table>
                            </div>
                            <?php
                                if($show_footer){
                            ?>
                            <div class=" mt-3">
                                <div class="row align-items-center justify-content-between">    
                                    <div class="col-md-auto justify-content-center">    
                                        <div class="d-flex justify-content-start">  
                                            <div class="dropup export-btn-holder mx-1">
                                                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">save</i> 
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <?php $export_print_link = add_query_params(['export' => 'print']); ?>
                                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                                    <img src="{{ asset('images/print.png') }}" class="mr-2" /> PRINT
                                                </a>
                                                <?php $export_pdf_link = add_query_params(['export' => 'pdf']); ?>
                                                <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                                <img src="{{ asset('images/pdf.png') }}" class="mr-2" /> PDF
                                            </a>
                                            <?php $export_csv_link = add_query_params(['export' => 'csv']); ?>
                                            <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                            <img src="{{ asset('/images/csv.png') }}" class="mr-2" /> CSV
                                        </a>
                                        <?php $export_excel_link = add_query_params(['export' => 'excel']); ?>
                                        <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                        <img src="{{ asset('images/xsl.png') }}" class="mr-2" /> EXCEL
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">   
                        <?php
                            if($show_pagination == true){
                            $pager = new Pagination($total_records, $record_count);
                            $pager->show_page_count = false;
                            $pager->show_record_count = true;
                            $pager->show_page_limit =false;
                            $pager->limit = $limit;
                            $pager->show_page_number_list = true;
                            $pager->pager_link_range=5;
                            $pager->render();
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        <!-- Detail Page Column -->
        <?php if(!request()->has('subpage')){ ?>
        <div class="col-12">
            <div class=" ">
                <div id="children-detail-page" class="master-detail-page"></div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
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

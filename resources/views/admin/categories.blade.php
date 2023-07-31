@extends('admin.layouts.master')
@section('title')
التصنيفات - حدادة الكويت 
	@stop
@section('css')
<!-- Internal Data table css -->
<link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">عام</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ التصنيفات</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
				<!-- row -->
				<div class="row">
                <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="card-header pb-0">
                    <a class="modal-effect btn btn-sm btn-primary" style="color:white" data-effect="effect-scale"
                    data-toggle="modal" href="#modaldemo8"><i
                            class="fas fa-plus"></i>&nbsp; اضافة تصنيف جديد</a>

            </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'
                        style="text-align: center">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">الصورة</th>
                                <th class="border-bottom-0">اسم التصنيف</th>
                                <th class="border-bottom-0">الرقم</th>
                                <th class="border-bottom-0">الوصف</th>
                                <th class="border-bottom-0">تاريخ الاضافه</th>
                                <th class="border-bottom-0">العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($categories as $category)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td><img src="{{ asset($category->image) }}" style="width: 60px; height: 50px;"></td>
                                    <td>{{ $category->cat_name }}</td>
                                    <td>{{ $category->contact }}</td>
                                    <td>{{ $category->details }}</td>
                                    <td>{{ Carbon\Carbon::parse($category->created_at)->diffForHumans() }}</td>
                                    <td>

                                        <button class="btn btn-outline-success btn-sm"
                                                    data-cat_name="{{ $category->cat_name }}" data-id="{{ $category->id }}"
                                                    data-details="{{ $category->details }}" data-contact="{{ $category->contact }}" data-toggle="modal"
                                                    data-target="#exampleModal2">تعديل</button>
                                            
                                                <button class="btn btn-outline-danger btn-sm " data-id="{{ $category->id }}"
                                                data-cat_name="{{ $category->cat_name }}" data-toggle="modal"
                                                    data-target="#modaldemo9">حذف</button>
                                    </td>
                                    
                                </tr>

                               
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
				</div>
				<!-- row closed -->

                <div class="modal" id="modaldemo8">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">اضافة تصنيف جديد</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('Category.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="exampleInputEmail1">اسم التصنيف</label>
                            <input type="text" class="form-control" name="cat_name" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">رقم التواصل </label>
                            <input type="number" class="form-control" name="contact" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">تفاصيل</label>
                            <textarea class="form-control" name="details" rows="5" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">صورة التصنيف</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">تاكيد</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Basic modal -->


    </div>

    <!-- edit -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعديل التصنيف</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('Category.update','test') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                        {{ method_field('patch') }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="">
                            <label for="recipient-name" class="col-form-label">اسم التصنيف:</label>
                            <input class="form-control" name="cat_name" id="cat_name" type="text" required>
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">رقم التصنيف:</label>
                            <input class="form-control" name="contact" id="contact" type="text" required>
                        </div>


                        <div class="form-group">
                            <label for="message-text" class="col-form-label">تفاصيل:</label>
                            <textarea class="form-control" id="details" name="details"  rows="5" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">صورة التصنيف</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">تاكيد</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- delete -->
    <div class="modal" id="modaldemo9">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف التصنيف</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{ route('Category.destroy','test') }}" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <p>هل انت متاكد من عملية الحذف ؟</p><br>
                        <input type="hidden" name="id" id="id" value="">
                        <input class="form-control" name="cat_name" id="cat_name" type="text" readonly>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-danger">تاكيد</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
   

    
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
<!--Internal  Datatable js -->
<script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
<script src="{{ URL::asset('assets/js/modal.js') }}"></script>
<script>
    $('#exampleModal2').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var cat_name = button.data('cat_name')
        var details = button.data('details')
        var contact = button.data('contact')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #cat_name').val(cat_name);
        modal.find('.modal-body #details').val(details);
        modal.find('.modal-body #contact').val(contact);
    })

</script>

<script>
    $('#modaldemo9').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var cat_name = button.data('cat_name')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #cat_name').val(cat_name);
    })

</script>
@endsection
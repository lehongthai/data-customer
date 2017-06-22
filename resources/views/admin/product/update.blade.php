@extends('layouts.admin')
@section('title', $title)

@section('css')
    <!-- Waves Effect Css -->
    <link href="{{ asset('css/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('css/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('css/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{ asset('css/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="{{ asset('css/plugins/waitme/waitMe.css') }}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('css/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endsection

@section('content')

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        <form role="form" method="POST" action="{{ route('product.update', $product->id) }}">
                        {{ csrf_field() }}
                            <h2 class="card-inside-title">UPDATE PRODUCT</h2>
                            <div class="row clearfix">
                            <div class="col-sm-2">
                                    <label>Product Categories</label>
                                </div>
                            
                                <div class="col-sm-6">
                                    <select class="form-control show-tick" name="cate_id">
                                        <option value="">-- Please select --</option>
                                        @foreach($listCate as $cate)
                                        <option value="{{ $cate->id }}" 
                                            @if(old('cate_id') == $cate->id || $product->id == $cate->id) selected  @endif 
                                        >{{ $cate->name }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                                <div class="col-sm-4">
                                <div class="form-group">
                                    <label id="email-error" class="error">{{ $errors->first('cate_id') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                <label>Product Name</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="name" value="{{ old('name', $product->name) }}" class="form-control" placeholder="Product Name" />
                                        </div>
                                        <label id="email-error" class="error">{{ $errors->first('name') }}</label>
                                    </div>
                                <label>Product Price</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="price" value="{{ old('price', $product->price) }}" class="form-control" placeholder="Product Price" />
                                        </div>
                                        <label id="email-error" class="error">{{ $errors->first('price') }}</label>
                                    </div>
                                <label>Product Quantity</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="quantity" value="{{ old('quantity', $product->quantity) }}" class="form-control" placeholder="Product Quantity" />
                                    </div>
                                    <label id="email-error" class="error">{{ $errors->first('quantity') }}</label>
                                </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                            <div class="col-sm-12">
                                <label>Product Status</label>
                            <div class="demo-radio-button">
                                <input name="status" value="1" type="radio" id="radio_7" class="radio-col-red" @if(old('status') == 1 || $product->status == 1) checked @endif/>
                                <label for="radio_7">RED</label>
                                <input name="status" value="2" type="radio" id="radio_8" class="radio-col-pink" @if(old('status') == 2 || $product->status == 2) checked @endif/>
                                <label for="radio_8">PINK</label>
                                <input name="status" value="3" type="radio" id="radio_9" class="radio-col-purple" @if(old('status') == 3 || $product->status == 3) checked @endif/>
                                <label for="radio_9">PURPLE</label>
                                <input name="status" value="4" type="radio" id="radio_10" class="radio-col-deep-purple" @if(old('status') == 4 || $product->status == 4) checked @endif/>
                                <label for="radio_10">DEEP PURPLE</label>
                                <input name="status" value="5" type="radio" id="radio_11" class="radio-col-indigo" @if(old('status') == 5 || $product->status == 5) checked @endif />
                                <label for="radio_11">INDIGO</label>
                                <input name="status" value="6" type="radio" id="radio_12" class="radio-col-blue" @if(old('status') == 6 || $product->status == 6) checked @endif />
                                <label for="radio_12">BLUE</label>
                                <input name="status" value="7" type="radio" id="radio_13" class="radio-col-light-blue" @if(old('status') == 7 || $product->status == 7) checked @endif />
                                <label for="radio_13">LIGHT BLUE</label>
                                <input name="status" value="8" type="radio" id="radio_14" class="radio-col-cyan" @if(old('status') == 8 || $product->status == 8) checked @endif />
                                <label for="radio_14">CYAN</label>
                                <input name="status" value="9" type="radio" id="radio_15" class="radio-col-teal" @if(old('status') == 9 || $product->status == 9) checked @endif />
                            </div>
                            </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                <label>Product Note</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" name="note" class="form-control no-resize" placeholder="Please type what you want...">{{ old('note', $product->note) }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                            <div class="pull-right">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">UPDATE</button>
                            </div>
                            </div>
                            </form>
                    </div>
                </div>
            </div>

@endsection

@section('js')
    <script src="{{ asset('css/plugins/node-waves/waves.js') }}"></script>

    <!-- Autosize Plugin Js -->
    <script src="{{ asset('css/plugins/autosize/autosize.js') }}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{ asset('css/plugins/momentjs/moment.js') }}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ asset('css/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
@endsection

@section('js_admin')
    <script src="{{ asset('js/pages/forms/basic-form-elements.js') }}"></script>
@endsection
@extends('layouts.app')

@section('content')

    {{--    <div class="content-wrapper">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-3 col-md-12 col-sm-12 _leftNav mb-30">--}}

    {{--                    <div class="card leftNav cate-sect mb-30">--}}
    {{--                        <h3>Refine By:<span class="_t-item">(0 items)</span></h3>--}}
    {{--                        <div class="col-12 p-0" id="catFilters"></div>--}}
    {{--                    </div>--}}

    {{--                    <div class="card leftNav cate-sect">--}}

    {{--                        <div class="accordion" id="accordionExample">--}}
    {{--                            <div class="card-header" id="headingTwo">--}}
    {{--                                <button class="btn btn-link" type="button" data-toggle="collapse"--}}
    {{--                                        data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">--}}
    {{--                                    Categories</button>--}}
    {{--                            </div>--}}

    {{--                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"--}}
    {{--                                 data-parent="#accordionExample">--}}
    {{--                                <div class="panel-body">--}}

    {{--                                    <?php $counter=0; ?>--}}
    {{--                                    @if(!empty($categories))--}}
    {{--                                        @foreach ($categories as $category)--}}
    {{--                                            <div class="custom-control custom-checkbox">--}}
    {{--                                                <input type="checkbox" {{($counter == 0 ? 'checked' : '')}}--}}
    {{--                                                attr-name="{{$category->name}}"--}}
    {{--                                                       class="custom-control-input category_checkbox" id="{{$category->id}}">--}}
    {{--                                                <label class="custom-control-label"--}}
    {{--                                                       for="{{$category->id}}">{{ucfirst($category->name)}}</label>--}}
    {{--                                            </div>--}}
    {{--                                            <?php $counter++; ?>--}}
    {{--                                        @endforeach--}}
    {{--                                    @endif--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <section>
        <div class="container">

            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    Product Overview
                </h3>
            </div>

            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-c-m m-tb-10">
                    <div
                        class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4">
                        <select id="sorting" name="sort">
                            <option value="">Sort By</option>
                            <option value="name" name="sort" class="option">name</option>
                            <option value="price" name="sort" class="option">price</option>

                        </select>
                    </div>

                </div>

                <div class="row isotope-grid" id="productData">
                    @foreach($products as $product)
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="{{   $product->image}}" alt="IMG-PRODUCT" width="280" height="320">

                                    <a href="#"
                                       class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                        Quick View
                                    </a>

                                </div>

                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="*"
                                           class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            {{ $product->name }}
                                        </a>

                                        <span class="stext-105 cl3">
									{{ number_format($product->price,2) }} DH
								</span>
                                    </div>
                                    <add-to-cart-button product-id="{{$product->id}}"
                                                        user-id="{{auth()->user()->id ?? 0}}"/>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection


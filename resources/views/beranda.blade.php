@extends('layouts.page')


@section('content')
<div class="container d-flex flex-row ">
    <div class="content" style="width: 85%">
        <div class="card" style="width:100%%;">
            <img src="https://cdn.stocksnap.io/img-thumbs/960w/architecture-building_GJQPY6MXWA.jpg" class='card-img-top' alt="" width="600" height="300">
            <div class="card-body">
                <h2>Lorem ipsum</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores adipisci quas fugiat saepe assumenda, quaerat culpa temporibus aliquam neque, sapiente beatae alias nisi praesentium ducimus tempora, molestias ex? Qui, veritatis?</p>
            </div>
        </div>
    
        {{-- //perulangan berita disini --}}
        <div class="card-group" style="width:100%;">
            <div class="card mb-3" style="width:100%;">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/nature-landscape_9OMJGAFYIZ.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card mb-3" style="width:100%;">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/nature-landscape_9OMJGAFYIZ.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    
        <div class="card-group" style="width:100%;">
            <div class="card mb-3" style="width:100%;">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/nature-landscape_9OMJGAFYIZ.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card mb-3" style="width:100%">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/nature-landscape_9OMJGAFYIZ.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

    {{-- iklan --}}
    <div class="ad mx-2">
        <div class="card card-img my-2" style="width:100%; height:60%">
            <img src="https://cdn.stocksnap.io/img-thumbs/280h/food-picnic_2WLVNKVVZN.jpg" alt="" width="100%" height="100%">
        </div>
        <div class="card card-img my-2" style="width:100%; height:40%">
            <img src="https://cdn.stocksnap.io/img-thumbs/280h/food-picnic_2WLVNKVVZN.jpg" alt="" width="100%" height="100%">
        </div>
    </div>
    
@endsection
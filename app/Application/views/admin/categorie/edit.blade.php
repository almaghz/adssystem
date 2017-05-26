@extends('admin.layout.app')

@section('title')
     {{ adminTrans('categorie' , 'Category') }} {{  isset($item) ? adminTrans('home' , 'edit') : adminTrans('home','add') }}
@endsection

@section('content')
    @component('admin.layout.form' , ['title' =>  adminTrans('categorie' , 'Category') , 'model' => 'categorie' , 'action' => isset($item) ? adminTrans('home' , 'edit') : adminTrans('home','add') ])
        @include('admin.layout.messages')
        <form action="{{ concatenateLangToUrl('admin/categorie/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {!! extractFiled('name' , isset($item->name) ? $item->name : null , 'text' , 'categorie') !!}

            <div class="form-group">
                <div class="form-line">
                    <label for="name">{{adminTrans('country' , 'slug')}}</label>
                    <input type="text" name="slug" id="slug" class="form-control" value="{{ isset($item) ? $item->slug : '' }}"/>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    {{ adminTrans('home' , 'save') }} {{ adminTrans('categorie' , 'Category') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection

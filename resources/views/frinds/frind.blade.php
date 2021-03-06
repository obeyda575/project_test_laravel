@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('user.insert') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="mb-3">
          <label class="form-label">{{ __('messages.name ar') }}</label>
          <input type="text" class="form-control" name="name_ar" placeholder="{{ __('messages.name ar') }}">
            @error('name_ar')
                <q class="form-text text-danger">{{ $message }}</q>
            @enderror
        </div>

        <div class="mb-3">
          <label class="form-label">{{ __('messages.name en') }}</label>
          <input type="text" class="form-control" name="name_en" placeholder="{{ __('messages.name en') }}">
            @error('name_en')
                <q class="form-text text-danger">{{ $message }}</q>
            @enderror
        </div>


        <div class="mb-3">
          <label class="form-label">{{ __('messages.Full') }}</label>
          <input type="text" class="form-control" name="full" placeholder="{{ __('messages.Full') }}">
            @error('full')
                <q class="form-text text-danger">{{ $message }}</q>
            @enderror
        </div>


        <div class="mb-3">
            <label class="form-label" > {{ __('messages.Date') }} </label>
          <input type="datetime-local" class="form-control" name="date" placeholder="{{ __('messages.Date') }}">
            @error('date')
                  <q class="form-text text-danger">{{ $message }}</q>
            @enderror
        </div>


        <div class="mb-3">
            <label class="form-label" > {{ __('messages.Ned ar') }} </label>
          <input type="text" class="form-control" name="needed_ar" placeholder="{{  __('messages.Ned ar') }}">
            @error('needed_ar')
                    <q class="form-text text-danger">{{ $message }}</q>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" > {{ __('messages.Ned en') }} </label>
          <input type="text" class="form-control" name="needed_en" placeholder="{{  __('messages.Ned en') }}">
            @error('needed_en')
                    <q class="form-text text-danger">{{ $message }}</q>
            @enderror
        </div>


        <div class="mb-3">
            <label class="form-label" > {{ __('messages.photo') }} </label>
          <input type="file" class="form-control" name="photo" placeholder="{{  __('messages.photo') }}">
            @error('photo')
                    <q class="form-text text-danger">{{ $message }}</q>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary"> {{ __('messages.save') }} </button>
      </form>
</div>
@endsection

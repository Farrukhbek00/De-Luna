@extends('layouts.main')


@section('title', 'Chat With Us')
@section('title2', 'Chat With Us')
@section('title3', 'Chat With Us')

@section('paragraph', 'Get in Touch')
@section('paragraph2', 'Get in Touch')
@section('paragraph3', 'AGet in Touch')


@section('content')
<div class="site-section site-section-sm">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8 mb-5">
        <form action="#" class="p-5 bg-white">

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Full Name</label>
              <input type="text" id="fullname" class="form-control" placeholder="Full Name">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="email">Email</label>
              <input type="email" id="email" class="form-control" placeholder="Email Address">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="phone">Phone</label>
              <input type="text" id="phone" class="form-control" placeholder="Phone #">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="message">Message</label> 
              <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Send Message" class="btn btn-primary pill px-4 py-2">
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection
    
  
    
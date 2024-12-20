@extends('frontend.layouts.master')
@section('title')
  Manhal Crafts - Event Promos Page
@endsection

@section('content')
     <main class="main">
       <div class="container">


        <style>
            .modal-xxl {
                max-width: 90%;
            }
        </style>

        @forelse($eventpromos as $row)
         <div class="card">
           <div class="card-image">
             <a href="{{ $row->image }}" data-fancybox="gallery" data-caption="Caption Images 1" data-bs-toggle="modal" data-bs-target="#welcomeModal-{{ $row->id }}">
               <img class="zoom" src="{{ $row->image }}" alt="Image Gallery">
             </a>
           </div>
         </div>
         <!-- Modal -->
         <div class="modal fade" id="welcomeModal-{{ $row->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="welcomeModalLebel-{{ $row->id }}" aria-hidden="true">
             {{-- <div class="modal-dialog modal-lg"> --}}
             {{-- <div class="modal-dialog modal-xl"> --}}
             <div class="modal-dialog modal-xxl">
                 <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title" id="welcomeModalLebel-{{ $row->id }}"> {{-- {{ $row->title }} --}} </h5>
                     <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></button>                            </div>
                     <div class="modal-body">
                         <div class="row">
                             <div class="col-md-5">
                                 {{-- @if($row->default_issue == 0)
                                 <div class="video-container d-flex">
                                     {!! $row->video_url !!}
                                 </div>
                                 @else
                                 <img src="{{ asset($row->image) }}" width="100%" height="350px" />
                                 @endif --}}
                                 <img src="{{ asset($row->image) }}" width="100%" height="400px" />
                             </div>
                             <div class="col-md-7">
                                 <p style="text-align: justify;">
                                     {!! $row->description !!}
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div> 
         <!-- Modal Ended -->
        @empty
        @endforelse

       </div>
     </main>
@endsection
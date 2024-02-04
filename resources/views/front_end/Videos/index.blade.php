@extends('front_end.layouts');

@section('contentPage')
<div class="container">
<div class="">
<h1 class="text text-center">Ajouter une nouvelle Videos</h1>
</div>
    <div class="row" >
        <div class="">
        <a href="#create-post-modal" uk-toggle class="flex items-center justify-center h-9 lg:px-5 px-2 rounded-md bg-blue-600 text-white space-x-1.5 absolute right-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="md:block hidden"> Nouvelle video </span>
                    </a> 

                <div id="create-post-modal" class="create-post" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical shadow-2xl uk-animation-slide-bottom-small">
  
          <div class="py-4 border-b flex  justify-between px-6">
              <h3 class="text-lg font-semibold"> Nouvelle Video </h3>
              <div>
                  <div class="font-semibold px-2.5 py-1 bg-gray-100  rounded-md text text-gray-500 text-sm mr-8">
                      Publier une video
                  </div>
                  <button class="uk-modal-close-default hover:bg-gray-100 rounded-full p-2.5 block uk-icon uk-close mt-0.5"
                      type="button" uk-close>
                      <i class="icon-feather-close"></i>
                  </button>
              </div>
          </div>
  
  
          <div class="create-post-modal-body space-x-6 p-5 overflow-x-hidden mr-1" data-simplebar>
  
              <form action="#" class="space-y-4 g:w-8/12">
                  <div class="relative uk-transition-toggle overflow-hidden">
                      <div
                          class="bg-gray-100 border-2 border-dashed flex flex-col h-40 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                              <path
                                  d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                              <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                          </svg>
                      </div>
                      <div class="w-full" >
                          <input type="file" name="lien_video">

                              Lien de la video</a>
                      </div>
                  </div>
  
                  <div class="font-semibold text-lg"> Titre </div>
                  <div class="border focus-within:bg-white focus-within:border-blue-300 p-3 pb-0 rounded-md">
                      <label for="" class="mb-0 ml-2 text-gray-600 text-sm"> Title (required)</label>
                      <input type="text" placeholder="Name"
                          class="-mt-2 -mx-3 bg-transparent focus:bg-white focus:ring-gray-300 h-8 outline-none px-0 text-base w-full" name="titre">
                  </div>
                  <div class="border focus-within:bg-white focus-within:border-blue-300 p-3 rounded-md">
                      <label for="" class="mb-0 ml-2 text-gray-600 text-sm"> Status (required)</label>
                      <textarea type="text" rows="5" placeholder="What's Your Mind ? Stella!"
                          class="bg-transparent focus:bg-white focus:ring-gray-300 focus:shadow-none outline-none p-2 resize-none shadow-none text-base w-full" name="status"></textarea>
                  </div>
                  
  
                
                  
                
              
              <div class="flex space-x-2">
                  <a href="#"
                      class="bg-red-100 flex font-medium h-9 items-center justify-center px-5 rounded-md text-red-600 text-sm">
                      <svg class="h-5 pr-1 rounded-full text-red-500 w-6 fill-current" id="veiw-more" fill="none"
                          stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="false"
                          style="">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                          </path>
                      </svg>
                      Live </a>
                  <a href="#"
                      class="bg-blue-600 flex h-9 items-center justify-center rounded-md text-white px-5 font-medium">
                      Publier </a>
              </div>
  
              <a href="#" hidden
                  class="bg-blue-600 flex h-9 items-center justify-center rounded-lg text-white px-12 font-semibold">
                  Share </a>
          </div>
  
        </div>
    </div>

            <form action="" class="mt-3" method="post">
               
               <div class="relative" uk-slider="finite: true">
                    
                    <div class="uk-slider-container px-1 py-3">
                        <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid">
                            <li>
                                <a href="{{route('ReadVideo') }}" class="w-full md:h-36 h-28 overflow-hidden rounded-lg relative block">
                                    <img src="{{asset('assets/images/video/img-2.png') }}" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                                    <img src="{{ asset('assets/images/icon-play.svg') }}" class="w-12 h-12 uk-position-center" alt="">
                                </a>
                                <div class="pt-3">
                                    <a href="video-watch.html" class="font-semibold line-clamp-2"> Great RC Jet Model Show With 2X SUKHOI SU-30 </a>
                                    <div class="pt-2">
                                        <a href="#" href="video-watch.html" class="text-sm">  Trap Nation  </a>
                                        <div class="flex space-x-2 items-center text-sm mt-1">
                                            <div> 27 weeks ago</div>
                                            <div class="md:block hidden">·</div>
                                            <div> 156.9K views</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="{{asset('video-watch.html') }}" class="w-full md:h-36 h-28 overflow-hidden rounded-lg relative block">
                                    <img src="{{asset('assets/images/video/img-3.png') }}" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                                    <img src="{{ asset('assets/images/icon-play.svg') }}" class="w-12 h-12 uk-position-center" alt="">
                                </a>
                                <div class="pt-3">
                                    <a href="{{ asset('video-watch.html') }}" class="font-semibold line-clamp-2"> Exploring an Abandoned Water Park in China
                                    </a>
                                    <div class="pt-2">
                                        <a href="#" class="text-sm font-medium"> Denise Marie</a>
                                        <div class="flex space-x-2 items-center text-sm mt-1">
                                            <div> 27 weeks ago</div>
                                            <div class="md:block hidden">·</div>
                                            <div> 156.9K views</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                           
                           
                           
                       

                    </div>
                </div>

                 

               
                
               
          
                    

         
        </div>
        </div>
        </div>
@endsection
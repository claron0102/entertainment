@extends('layouts.app')
@section('content')
@if ($res)
    <div class="mt-4 container mx-auto flex flex-col sm:flex-row">
            <div class="title">
                @section('title')
                    {{ $movie['title'] }}
                @endsection
                <div class="text-white opacity-25  text-2xl">{{ $movie['title'] }}</div>
                <div class="mt-2 flex flex-col sm:flex-row">
                    <div class="image text-center ">
                        <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" class="w-48 sm:w-24 md:w-32 lg:w-full" alt="">
                    </div>
                    <div class="video ml-12 ">
                        @if ($movievedio['results'])
                        <video
                            id="my-video"
                            class="video-js"
                            controls
                            preload="auto"
                            width="640"
                            height="264"
                            poster="MY_VIDEO_POSTER.jpg"
                            data-setup="{}"
                        >
                            <source  src="http://192.168.12.30:5000/fbdownload/Bumblebee%20(2018).mp4?_sid=%22FfMnNkv4W9Qek1970PCN386709%22&mode=open&dlink=%222f7765622f656e7465727461696e6d656e745f66696c65732f42756d626c65626565202832303138292e6d7034%22&stdhtml=true&SynoToken=YfDVuSDGOIbQM" type="video/mp4" />
                            
                            </p>
                        </video>


                        
                          {{--   <iframe width="655" height="330" src="https://www.youtube.com/embed/{{ $movievedio['results'][0]['key'] }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                        @else
                            <p>No video avalaible For this Movie...</p>  
                        @endif
                        <div class="plot mt-2 text-white opacity-50 font-semibold text-sm">Overview</div>
                        <div class="description mt-2 text-sm text-gray-700 font-semibold">
                            <p style="width: 640px">{{ $movie['overview'] }} </p>
                        </div>
                        <div class="actors mt-6">
                            <div class="plot text-white opacity-50 text-sm font-semibold">Actors</div>
                            <div class="display-actors-images grid gap-1 lg:grid-cols-8 md:grid-cols-4 sm:grid-cols-2 grid-col-1 mt-2">
                                @if ($casts)
                                    @foreach ($casts as $cast)
                                    @if ($loop->index <= 7)
                                    <div class="actor-images">
                                        @if (strlen($cast['profile_path']) > 0)
                                        <img src="{{ 'https://image.tmdb.org/t/p/w500'.$cast['profile_path'] }}" class="w-20" alt="actor">
                                        @else
                                        <img src="https://via.placeholder.com/80x120?text=NotFound" class="w-20" alt="actor">
                                        @endif
                                        <div class="actor-name mt-1  text-white opacity-25 text-sm">{{ $cast['name'] }}</div>
                                    </div>
                                    @endif
                                @endforeach
                                @else
                                <p>No Casts for this movie</p>
                                @endif
                                
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </div>
@else
<p class="mt-4 text-center font-semibold">No resuls for your request</p>
@endif
@endsection
@extends('main.layouts.app')
@section('title','Tech-Blog')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="entry-title">Portfolio ( 4 column )</h2>
                    <div class="breadcrumb">
                        <a href="#"><i class="icon-home"></i> Home</a>
                        <span class="crumbs-spacer"><i class="ico-fast-forward"></i></span> <span class="current">Portfolio ( 4 column )</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-3">
                    <ul class="controls">
                        <li class="filter active" data-filter="all">All</li>
                        <li class="filter" data-filter=".design">Design</li>
                        <li class="filter" data-filter=".creative">Creative</li>
                        <li class="filter" data-filter=".digital">Digital</li>
                        <li class="filter" data-filter=".wordpress">WordPress</li>
                    </ul>
                </div>
                <div id="portfolio-list">
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 mix design digital">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img alt="" src="{{ asset('main/img/portfolio/img-1.jpg') }}">
                                <div class="portfolio-item-content">
                                    <h3 class="field-content"><a href="#">Cras Commodo Ets</a></h3>
                                </div>
                                <div class="icon-zoom-in">
                                    <a class="link" href="portfolio-item.html"><i class="fa fa-link"></i></a> <a class="zoom" data-lightbox="roadtrip" href="{{ asset('main/img/portfolio/img-1.jpg') }}"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 mix design creative">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img alt="" src="{{ asset('main/img/portfolio/img-2.jpg') }}">
                                <div class="portfolio-item-content">
                                    <h3 class="field-content"><a href="#">Quarterly Musashino</a></h3>
                                </div>
                                <div class="icon-zoom-in">
                                    <a class="link" href="portfolio-item.html"><i class="fa fa-link"></i></a> <a class="zoom" data-lightbox="roadtrip" href="{{ asset('main/img/portfolio/img-1.jpg') }}"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 mix design wordpress">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img alt="" src="{{ asset('main/img/portfolio/img-3.jpg') }}">
                                <div class="portfolio-item-content">
                                    <h3 class="field-content"><a href="#">Non Mattis Tortor</a></h3>
                                </div>
                                <div class="icon-zoom-in">
                                    <a class="link" href="portfolio-item.html"><i class="fa fa-link"></i></a> <a class="zoom" data-lightbox="roadtrip" href="{{ asset('main/img/portfolio/img-1.jpg') }}"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 mix digital creative">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img alt="" src="{{ asset('main/img/portfolio/img-4.jpg') }}">
                                <div class="portfolio-item-content">
                                    <h3 class="field-content"><a href="#">Shitamachi Rocket</a></h3>
                                </div>
                                <div class="icon-zoom-in">
                                    <a class="link" href="portfolio-item.html"><i class="fa fa-link"></i></a> <a class="zoom" data-lightbox="roadtrip" href="{{ asset('main/img/portfolio/img-1.jpg') }}"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 mix design digital">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img alt="" src="{{ asset('main/img/portfolio/img-5.jpg') }}">
                                <div class="portfolio-item-content">
                                    <h3 class="field-content"><a href="#">Proin Varius Nibh</a></h3>
                                </div>
                                <div class="icon-zoom-in">
                                    <a class="link" href="portfolio-item.html"><i class="fa fa-link"></i></a> <a class="zoom" data-lightbox="roadtrip" href="{{ asset('main/img/portfolio/img-1.jpg') }}"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 mix designe wordpress">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img alt="" src="{{ asset('main/img/portfolio/img-6.jpg') }}">
                                <div class="portfolio-item-content">
                                    <h3 class="field-content"><a href="#">Monocle issue</a></h3>
                                </div>
                                <div class="icon-zoom-in">
                                    <a class="link" href="portfolio-item.html"><i class="fa fa-link"></i></a> <a class="zoom" data-lightbox="roadtrip" href="{{ asset('main/img/portfolio/img-1.jpg') }}"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 mix designe wordpress">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img alt="" src="{{ asset('main/img/portfolio/img-7.jpg') }}">
                                <div class="portfolio-item-content">
                                    <h3 class="field-content"><a href="#">Monocle issue</a></h3>
                                </div>
                                <div class="icon-zoom-in">
                                    <a class="link" href="portfolio-item.html"><i class="fa fa-link"></i></a> <a class="zoom" data-lightbox="roadtrip" href="{{ asset('main/img/portfolio/img-1.jpg') }}"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 mix designe wordpress">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img alt="" src="{{ asset('main/img/portfolio/img-8.jpg') }}">
                                <div class="portfolio-item-content">
                                    <h3 class="field-content"><a href="#">Monocle issue</a></h3>
                                </div>
                                <div class="icon-zoom-in">
                                    <a class="link" href="portfolio-item.html"><i class="fa fa-link"></i></a> <a class="zoom" data-lightbox="roadtrip" href="{{ asset('main/img/portfolio/img-1.jpg') }}"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
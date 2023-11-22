@extends('Dashboard.layouts.design')
@section('title', 'Tempalte-Edit')
@section('main-content')
    
    
    

    <div id="previewImg" style="display: none;"></div>
    @include('Dashboard.Template.Make.background')
    @include('Dashboard.Template.Make.template')
    @include('Dashboard.Template.Make.List')
    @include('Dashboard.Template.Make.download')
    @include('Dashboard.Template.Make.resize')
    @include('Dashboard.Template.Make.preview')
@endsection
@section('bottom-js')

    <script src="{{asset('Dashboard/js/Files/code.jquery.com.js')}}"></script>

    <script src="{{ asset('Dashboard/js/Files/html2canvas.min.js') }}"></script>
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>

    <script src="{{asset('Dashboard/js/Files/cdnjs.cloudflare.com_ajax_libs_interact.js_1.10.19_interact.min.js')}}"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('Dashboard/js/Files/cdn.jsdelivr.net_gh_AmagiTech_JSLoader_amagiloader.js')}}"></script>

    <script src="{{ asset('Dashboard/js/Files/template/background.js') }}"></script>
    <script src="{{ asset('Dashboard/js/Files/template/list.js') }}"></script>
        <script src="{{ asset('Dashboard/js/Files/template/download.js') }}"></script>
    <script src="{{ asset('Dashboard/js/Files/template/resize.js') }}"></script>
    <script src="{{ asset('Dashboard/js/Files/template/template.js') }}"></script>
    <script src="{{ asset('Dashboard/js/Files/template/preview.js') }}"></script>
    <script src="{{ asset('Dashboard/js/Files/editor.js') }}"></script>

    <script>

        
    </script>
@endsection

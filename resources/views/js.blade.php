<script src="{{asset('js/app.js')}}"></script>

<!-- BEGIN SCRIPTS TO BE RENDERED ONLY IN SOME LAYOUT VIEWS -->
@if(!isset($limit) || (isset($limit) && !$limit))
    <script src="{{asset('js/home.js')}}"></script>
@endif
<!-- END SCRIPTS TO BE RENDERED ONLY IN SOME LAYOUT VIEWS -->
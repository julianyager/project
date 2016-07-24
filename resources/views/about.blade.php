@extends('layout')



@section('content')

                @unless (empty($guys))
                  There are some people.
                @endunless

                @foreach ($guys as $person)
                  <li> {{ $person }} </li>
                @endforeach
@stop


@section('footer')
<script>
  alert('About page activated');
</script>
  @stop

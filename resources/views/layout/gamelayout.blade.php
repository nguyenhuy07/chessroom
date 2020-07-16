<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layout.partials.head')
  </head>
  <body class="{{ $bodyClass }}">
    @include('layout.partials.header')
    <main>
    <div class="container-fluid game px-0">
        <div class="container p-5">
          <audio id="nuoc-co">
            <source src="{{ URL::to('/') }}/sound/nuocCo.mp3" type="audio/mpeg">
            <source src="{{ URL::to('/') }}/sound/nuocCo.wav" type="audio/wav">
            Your browser does not support the audio element.
          </audio>
          <audio id="het-tran">
            <source src="{{ URL::to('/') }}/sound/hetTran.mp3" type="audio/mpeg">
            <source src="{{ URL::to('/') }}/sound/hetTran.wav" type="audio/wav">
            Your browser does not support the audio element.
          </audio>
          <div id="chess-board" class="w-50 mx-auto"></div>
          <p class="w-100 text-center my-3">
            <span class="d-inline-block rounded" id="game-status"></span>
          </p>
          <p class="w-100 text-center mt-2">
            <span class="rounded d-none" id="game-over" data-toggle="tooltip" data-placement="top" data-original-title="Press 'Host a Room' to play with real person"><i class="fad fa-flag-checkered"></i> GAME OVER</span>
          </p>
          <p class="w-100 text-center my-4">
            <a id="create-room" data-room="<?php echo md5(time()); ?>" data-url="/room/<?php echo md5(time()); ?>" class="btn btn-success btn-lg{{ $roomCode == '' ? ' pulse': '' }}"><i class="fad fa-plus-circle"></i> Host a room</a>
          </p>
          @yield('aboveContent')
          <div class="row">
            <input type="hidden" name="FEN" id="FEN" />
            @include('layout.partials.scripts')
            @yield('belowContent')
          </div>
        </div>
      </div>
      @include('layout.partials.rules')
      @include('layout.partials.adsense')
      @include('layout.partials.fb')
    </main>
    @include('layout.partials.footer')
  </body>
</html>
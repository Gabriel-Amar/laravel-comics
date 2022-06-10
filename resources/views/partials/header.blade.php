  @stack('css')
  <header>
    <img src="../img/dc-logo.png" alt="">
    <nav>
      <ul>
        <?php
        $link = config('links');
        ?>
        @foreach ($link as $linko)
        <li>
          {{$linko['testo']}}
        </li>
        @endforeach
      </ul>
    </nav>
  </header>
  <div>
    <img src="../img/jumbotron.jpg" alt="" class="jumbo">
  </div>

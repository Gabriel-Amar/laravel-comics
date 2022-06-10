<footer class="footer">
    <div class="width">
    <section>
        <h2>DC comics</h2>
        <ul>
            <?php
            $link = config('footerlink1');
            ?>
            @foreach ($link as $linko)
            <li>
                {{$linko['testo']}}
            </li>
            @endforeach
        </ul>
        <h2>Shop</h2>
        <ul>
            <li>
                Shop DC
            </li>
            <li>
                Shop DC Collectibles
            </li>
        </ul>
    </section>

    <section>
        <h2>DC</h2>
        <ul>
            <?php
            $link = config('footerlink2');
            ?>
            @foreach ($link as $linko)
            <li>
                {{$linko['testo']}}
            </li>
            @endforeach
        </ul>
    </section>

    <section>
        <h2>Sites</h2>
        <ul>
            <?php
            $link = config('footerlink3');
            ?>
            @foreach ($link as $linko)
            <li>
                {{$linko['testo']}}
            </li>
            @endforeach
        </ul>
    </section>
    </div>
</footer>
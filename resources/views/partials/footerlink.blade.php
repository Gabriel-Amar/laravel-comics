<footer>
    <div class="width">
    <section>
        <h2>DC comics</h2>
        <ul>
            <li v-for="(item, index) in links1" :key="index">
                {{item.testo}}
            </li>
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
            <li v-for="(item, index) in links2" :key="index">
                {{item.testo}}
            </li>
        </ul>
    </section>

    <section>
        <h2>Sites</h2>
        <ul>
            <li v-for="(item, index) in links3" :key="index">
                {{item.testo}}
            </li>
        </ul>
    </section>
    </div>
</footer>
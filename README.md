## Description

Compare performances of native code, mustache, and mustache with cache.

## Usage

```bash
cd path/to/repo
./run.bash
```

## Bechmark Results

Two code formats are considered to be tested, simple and loop.

Simple code is:

```html
<div class="test">
    <h2>This is a test of {{ name }}</h2>
    <p>The homepage is <a href="{{ url }}">{{ url }}</a>.</p>
    <p>The sources is: {{ source }}</p>
</div>
```

Loop code is:

```html
<div class="comments">
    <h3>{{ header }}</h3>
    <ul>
        {{# comments }}
        <li class="comment">
            <h5>{{ name }}</h5>
            <p>{{ body }}</p>
        </li>
        {{/ comments }}
    </ul>
</div>
```

Under the condition of 5000 times tests with 10 times to achieve more accuracy, the benchmark results are:

-   NATIVE
    Simple Test: 172.58696289062ms, 251.2byte PHP, 0byte System
    Loop Test: 211.86215820313ms, 236byte PHP, 0byte System

-   MUSTACHE
    Simple Test: 351.74748535156ms, 106027.2byte PHP, 812646.4byte System
    Loop Test: 662.95397949219ms, 45887.2byte PHP, 0byte System

-   MUSTACHE WITH CACHE
    Simple Test: 254.71838378906ms, 37112byte PHP, 52428.8byte System
    Loop Test: 498.42153320313ms, 4415.2byte PHP, 0byte System

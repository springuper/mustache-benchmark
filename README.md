## Description

Compare performances of native code, mustache, and mustache with cache.

## Usage

```bash
cd path/to/repo
./run.bash
```

## Bechmark Result

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

Under the condition of 10000 times tests with 10 times repeat to achieve more accuracy, the benchmark results are:

-   NATIVE

    Simple Test: 422.60158691406ms, 236byte PHP, 0byte System

    Loop Test: 546.904296875ms, 246.4byte PHP, 0byte System

-   MUSTACHE

    Simple Test: 1085.1153076172ms, 114468byte PHP, 786432byte System

    Loop Test: 2036.5076171875ms, 88222.4byte PHP, 0byte System

-   MUSTACHE WITH CACHE

    Simple Test: 728.39565429688ms, 37102.4byte PHP, 52428.8byte System

    Loop Test: 1496.5395751953ms, 4422.4byte PHP, 26214.4byte System

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

Under the condition of 10000 times tests with 10 times repeat to achieve more accuracy, and environment of `GNU/Linux`, the benchmark results are:

-   NATIVE

    Simple Test: 446.98557128906ms, 236byte PHP, 0byte System

    Loop Test: 587.33327636719ms, 246.4byte PHP, 0byte System

-   MUSTACHE

    Simple Test: 1089.334375ms, 114459.2byte PHP, 786432byte System

    Loop Test: 2174.9577148438ms, 88196.8byte PHP, 0byte System

-   MUSTACHE WITH CACHE

    Simple Test: 722.47292480469ms, 37103.2byte PHP, 52428.8byte System

    Loop Test: 1600.6427246094ms, 4433.6byte PHP, 26214.4byte System

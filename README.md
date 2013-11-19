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

Enviroments:

- GNU/Linux 2.6.32-358.6.1.el6.x86_64
- Php 5.3.3
- Mustache 2.4.1
- Smarty 3.1.15

Under the condition of 10000 times tests with 10 times repeat to achieve more accuracy, the benchmark results are:

-   NATIVE

    Simple Test: 445.17138671875ms, 236byte PHP, 0byte System

    Loop Test: 577.066796875ms, 248.8byte PHP, 0byte System

-   MUSTACHE

    Simple Test: 724.44145507813ms, 37070.4byte PHP, 52428.8byte System

    Loop Test: 1555.9180664063ms, 4378.4byte PHP, 26214.4byte System

-   MUSTACHE WITH CACHE

    Simple Test: 687.74641113281ms, 37100.8byte PHP, 52428.8byte System

    Loop Test: 1500.4651855469ms, 4431.2byte PHP, 26214.4byte System

-   SMARTY WITH CACHE

    Simple Test: 740.8416015625ms, 2527.2byte PHP, 0byte System

    Loop Test: 920.65222167969ms, 3152byte PHP, 0byte System

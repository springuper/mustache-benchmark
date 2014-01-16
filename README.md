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

- GNU/Linux 3.2.0-34-virtual
- Php 5.3.10
- Mustache 2.4.1
- Twig 1.15.0-DEV
- Smarty 3.1.15

Under the condition of 10000 times tests with 10 times repeat to achieve more accuracy, the benchmark results are:

    ===NATIVE===
    Simple Test: 146.19399414062ms, 310.4byte PHP, 0byte System
    Loop Test: 136.38813476563ms, 236byte PHP, 26214.4byte System

    ===MUSTACHE===
    Simple Test: 395.30563964844ms, 23620.8byte PHP, 52428.8byte System
    Loop Test: 780.89516601563ms, 2816byte PHP, 0byte System

    ===MUSTACHE CACHED===
    Simple Test: 152.10305175781ms, 200byte PHP, 0byte System
    Loop Test: 459.80954589844ms, 200byte PHP, 0byte System

    ===TWIG===
    Simple Test: 176.93303222656ms, 131239.2byte PHP, 157286.4byte System
    Loop Test: 544.47629394531ms, 15188byte PHP, 0byte System

    ===SMARTY===
    Simple Test: 264.49147949219ms, 260452byte PHP, 262144byte System
    Loop Test: 327.04890136719ms, 6908.8byte PHP, 0byte System

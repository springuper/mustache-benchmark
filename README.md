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

-	NATIVE

	Simple Test: 150.80124511719ms, 388.8byte PHP, 0byte System

	Loop Test: 115.1564453125ms, 401.6byte PHP, 0byte System

-	MUSTACHE

	Simple Test: 653.93806152344ms, 13515.2byte PHP, 26214.4byte System

	Loop Test: 1284.2868408203ms, 2468byte PHP, 0byte System

-	TWIG

	Simple Test: 461.39296875ms, 81692byte PHP, 52428.8byte System

	Loop Test: 1142.9485595703ms, 14024byte PHP, 26214.4byte System

-	SMARTY

	Simple Test: 747.65390625ms, 255336byte PHP, 262144byte System

	Loop Test: 915.72463378906ms, 6268byte PHP, 0byte System

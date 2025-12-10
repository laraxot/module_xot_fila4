<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
@php
'<?phpxml version="1.0" encoding="UTF-8"?>'.PHP_EOL
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
@php
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
=======
=======
>>>>>>> 218dfed3 (.)
=======
@php
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
@php
'<?phpxml version="1.0" encoding="UTF-8"?>'.PHP_EOL
=======
@php
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
>>>>>>> a12f125f4a (.)
=======
@php
'<?phpxml version="1.0" encoding="UTF-8"?>'.PHP_EOL
>>>>>>> b93ef594b4 (.)
=======
@php
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
@endphp
<rss version="2.0">
    <channel>
        <title><![CDATA[ {{ config('metatag.title') }} ]]></title>
        <link><![CDATA[ {{ url('/') }} ]]></link>
        <description><![CDATA[ {{ config('metatag.description') }} ]]></description>
        <language>{{ $lang }}</language>
        <pubDate>{{ now() }}</pubDate>
        @foreach ($items as $item)
            <item>
                <title><![CDATA[{{ $item->title }}]]></title>
                <subtitle><![CDATA[{{ $item->subtitle }}]]></subtitle>
                {{-- guid o cosa? --}}
                <link> {{ url(Panel::make()->get($item)->url()) }} </link>
                <description><![CDATA[{!! $item->txt !!}]]></description>
                {{-- in category post_type? oppure togliamo il tag? oppure cosa?--}}
                <category>{{ $item->post_type }}</category>
                <author><![CDATA[{{ $item->created_by }}]]></author>
                {{-- guid o id?? --}}
                <guid>{{ $item-> }}</guid>
                <pubDate>{{ $item->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>

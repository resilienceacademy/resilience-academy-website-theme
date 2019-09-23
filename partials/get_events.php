<?php

$sameDaylastWeek = time() - (7 * 86400 * 3600);
$someDaynextMonth = time() + (31 * 86400 * 3600);
$sample_events = [
    [
        "image" => "https://staging.resilienceacademy.ac.tz/wp-content/uploads/2019/06/img-20180915-wa0139_44116338715_o.jpg",
        "title" => "Soulful sundays bay area",
        "date" => $sameDaylastWeek, // Same day as today, last week,
        "location" => "Maswa, Shinyanga",
        "link" => "https://www.eventbrite.com/e/soulful-sundays-bay-area-edition-tickets-55214242285?aff=ehomecard"
    ],
    [
        "image" => "https://staging.resilienceacademy.ac.tz/wp-content/uploads/2019/08/official-launch-of-the-elia-biennial-1-Copy.png",
        "title" => "London Comicon",
        "date" => time(), // Today,
        "location" => "National Museum",
        "link" => "https://www.eventbrite.co.uk/e/london-film-comic-con-summer-2019-tickets-49472593860?aff=ebdssbdestsearch"
    ],
    [
        "image" => "https://images.unsplash.com/photo-1569165002774-4514da1d84c8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80",
        "title" => "Youth Athletic Camp",
        "date" => $someDaynextMonth, // Some day as today, next month,
        "location" => "Coco Beach",
        "link" => "https://www.eventbrite.com/e/leaner-stronger-faster-tm-youth-athletic-camp-2021-tickets-38245970728?aff=ebdssbdestsearch"
    ]
];

echo json_encode($sample_events);
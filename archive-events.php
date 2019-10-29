
<?php
wp_enqueue_style('min-event-calender', get_template_directory_uri() . '/css/mini-event-calendar.min.css');
wp_enqueue_style('events', get_template_directory_uri() . '/css/events.css');
get_header();
?>


<section id="banner">
    <div class="section-wrapper">
        <h2>
            Show me the <a href="#">calendar.</a>
        </h2>

        <div id="calendarContainer">
            <div class="layout">
                <div class="image">
                    <img src="https://images.unsplash.com/photo-1532251632967-758f04b1c338?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
                </div>
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</section>

<section id="events">
    <div class="section-wrapper">
        <h2>Events for <span id="curMonthYear">September 2019</span></h2>

        <div id="eventList" class="layout wrap">
            <div class="event-item">
                <div class="layout vertical">
                    <div class="image">
                        <img src="https://staging.resilienceacademy.ac.tz/wp-content/uploads/2019/08/official-launch-of-the-elia-biennial-1-Copy.png" alt="">

                        <div class="event-date position-absolute pin-top pin-left">
                            <span>SEP</span>
                            <span>17</span>
                        </div>
                    </div>

                    <div class="text flex layout vertical">
                        <h3>URTZ 2019 Conference</h3>
                        <p>
                            9 AM - 4 PM, National Museaum
                        </p>
                    </div>
                </div>
            </div>

            <div class="event-item">
                <div class="layout vertical">
                    <div class="image">
                        <img src="https://staging.resilienceacademy.ac.tz/wp-content/uploads/2019/06/img-20180915-wa0139_44116338715_o.jpg" alt="">

                        <div class="event-date position-absolute pin-top pin-left">
                            <span>SEP</span>
                            <span>01</span>
                        </div>
                    </div>

                    <div class="text flex layout vertical">
                        <h3>World Clean Up Day</h3>
                        <p>
                            10 AM - 4 PM, Coco Beach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var $ = jQuery;
    var initialRender = true;
    var fetchedEvents = {};
    var eventList = document.querySelector("#eventList");
    var monthCells = document.querySelectorAll("#monthsContainer td");
    var curMonthYear = document.querySelector("#curMonthYear");
    var calendar;
    $(document).ready(function(){
        calendar = $("#calendar");

        $("#calendar").MEC({
            onMonthChanged: function(month, year){
                setCurrentMonth(month);
                curMonthYear.textContent = $("#monthYear").text();
                // month indexes start at 0
                var actualMonth = month + 1;
                getEvents(actualMonth, year);
            }
        });
    });

    function setCurrentMonth(index){
        var selectedMonthCell = document.querySelector("#monthsContainer td.selected");
        if(selectedMonthCell)
            selectedMonthCell.classList.remove('selected');

        if(monthCells[index])
            monthCells[index].classList.add('selected');
    }

    function eventItemTpl(event){
        return `
            <div class="event-item">
                <div class="layout vertical">
                    <div class="image">
                        <img src="${event.image}" alt="">

                        <div class="event-date position-absolute pin-top pin-left">
                            <span>${$("#monthYear").text().substr(0, 3)}</span>
                            <span>${event.day.toString().padStart(2, '0')}</span>
                        </div>
                    </div>

                    <div class="text flex layout vertical">
                        <h3>${event.title}</h3>
                        <p>
                            ${event.location}
                        </p>
                    </div>
                </div>
            </div>
        `;
    }

    function getEvents(month, year, callback) {
        console.log("Fetched: ", fetchedEvents[`m${month}-y${year}`]);
        if(initialRender){
            initialRender = false;
            return;
        }
        else if(fetchedEvents[`m${month}-y${year}`]){
            renderEvents(fetchedEvents[`m${month}-y${year}`], month);
            return;
        }
        eventList.innerHTML = "<span id='eventsLoader'>Fetching Events...</span>";

        $.get("<?php echo get_home_url(); ?>/get_events.php", function(events) {
            var events = JSON.parse(events);
            fetchedEvents[`m${month}-y${year}`] = events;

            renderEvents(events, month);
        });
    }

    function renderEvents(events, month){
        eventList.innerHTML = "";

        events.forEach(function(e){
            var date = new Date(e.date);
            var event = {
                ...e,
                day: date.getDate(),
                month: month
            };
            var eventItem = $(eventItemTpl(event)).get(0);
            eventList.appendChild(eventItem);
        });
    }
</script>

<?php get_footer(); ?>
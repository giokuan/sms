
{{-- <div class="p-10 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 "> --}}
    {{-- @extends('partials.__sidebar')

    @section('content')	 --}}

    <style>
        #calendar-container{
            width: 100%;
            display:flex;
            align-items:center;
            justify-content: center;
            margin-top:10rem;
        }
        #calendar{
            padding: 10px;
            margin: 10px;
            width: 1340px;
            height: 610px;
            border:2px solid black;
          
            
        }

        #back{

            border: solid 1px black;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left:17.5rem;
            margin-right:17.5rem;
            margin-top:2rem;
            height:3rem;
            background-color: rgb(53, 53, 59);
            text-decoration:none;
            color:aliceblue;
            border-radius:1rem;
            
        }

        #back:hover{
            background-color:rgb(71, 71, 80)
        }
    </style>
      
    <div>
      <div id='calendar-container' wire:ignore>
        <div id='calendar'></div>
      </div>
    </div>

    <a href="{{url('dashboard')}}" id="back" >Back to Dashboard</a>
  
 

    @push('scripts')
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js'></script>
        
        <script>
            document.addEventListener('livewire:load', function() {
                var Calendar = FullCalendar.Calendar;
                var Draggable = FullCalendar.Draggable;
                var calendarEl = document.getElementById('calendar');
                var checkbox = document.getElementById('drop-remove');
                var data =   @this.events;
                var calendar = new Calendar(calendarEl, {
                events: JSON.parse(data),
                dateClick(info)  {
                   var title = prompt('Enter Event Title');
                   var date = new Date(info.dateStr + 'T00:00:00');
                   if(title != null && title != ''){
                     calendar.addEvent({
                        title: title,
                        start: date,
                        allDay: true
                      });
                     var eventAdd = {title: title,start: date};
                     @this.addevent(eventAdd);
                     alert('Great. Now, update your database...');
                   }else{
                    alert('Event Title Is Required');
                   }
                },
                editable: true,
                selectable: true,
                displayEventTime: false,
                droppable: true, // this allows things to be dropped onto the calendar
                drop: function(info) {
                    // is the "remove after drop" checkbox checked?
                    if (checkbox.checked) {
                    // if so, remove the element from the "Draggable Events" list
                    info.draggedEl.parentNode.removeChild(info.draggedEl);
                    }
                },
                eventDrop: info => @this.eventDrop(info.event, info.oldEvent),
                loading: function(isLoading) {
                        if (!isLoading) {
                            // Reset custom events
                            this.getEvents().forEach(function(e){
                                if (e.source === null) {
                                    e.remove();
                                }
                            });
                        }
                    }
                });
                calendar.render();
                @this.on(`refreshCalendar`, () => {
                    calendar.refetchEvents()
                });
            });
        </script>
        <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css' rel='stylesheet' />
    @endpush

               
    {{-- @endsection --}}
@livewireScripts


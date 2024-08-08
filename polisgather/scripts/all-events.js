const eventsPerPage = 9;
let currentPage = 1;
let events = [];
let filteredEvents = [];

fetch('get_events.php')
  .then(response => response.json())
  .then(data => {
    events = data;
    filteredEvents = events;
    updatePage();
  })
  .catch(error => console.error('Error fetching events:', error));

const prevPageBtn = document.getElementById('prev-page');
const nextPageBtn = document.getElementById('next-page');
const currentPageSpan = document.getElementById('current-page');

prevPageBtn.addEventListener('click', function() {
  if (currentPage > 1) {
    currentPage--;
    updatePage();
  }
});

nextPageBtn.addEventListener('click', function() {
  if (currentPage < Math.ceil(filteredEvents.length / eventsPerPage)) {
    currentPage++;
    updatePage();
  }
});

document.getElementById('filter-form').addEventListener('submit', function(event) {
  event.preventDefault();

  const startDate = document.getElementById('start-date').value;
  const endDate = document.getElementById('end-date').value;
  const keyword = document.getElementById('keyword').value.toLowerCase();

  filteredEvents = filterEvents(events, startDate, endDate, keyword);

  currentPage = 1;
  updatePage();
});

function filterEvents(events, startDate, endDate, keyword) {
  const filteredEvents = [];

  for (const event of events) {
    const eventDate = new Date(event.date);
    const eventTitle = event.title.toLowerCase();

    const dateInRange = (!startDate || eventDate >= new Date(startDate)) &&
                        (!endDate || eventDate <= new Date(endDate));

    const keywordMatches = !keyword || eventTitle.includes(keyword.toLowerCase());

    if (dateInRange && keywordMatches) {
      filteredEvents.push(event);
    }
  }

  return filteredEvents;
}

function updatePage() {
  currentPageSpan.textContent = currentPage;
  loadEvents();
}

function loadEvents() {
  const content = document.querySelector('.all-events-grid');
  content.innerHTML = '';

  const startIndex = (currentPage - 1) * eventsPerPage;
  const endIndex = Math.min(startIndex + eventsPerPage, filteredEvents.length);

  for (let i = startIndex; i < endIndex; i++) {
    const event = filteredEvents[i];

    const eventPreview = document.createElement('div');
    eventPreview.classList.add('event-preview');

    const eventDate = new Date(event.date);
    const monthName = eventDate.toLocaleString('default', { month: 'long' });
    const monthShortForm = monthName.substring(0, 3).toUpperCase();
    const day = eventDate.getDate();

    eventPreview.innerHTML = `
      <div class="event-image-row">
        <img class="event-image" src="${event.imageUrl}" alt="${event.title}">
        <div class="event-monthday">
          <span class="event-month">${monthShortForm}</span>
          <span class="event-day">${day}</span>
        </div>
      </div>
      <div class="event-info">
        <p class="event-title">${event.title}</p>
        <p class="event-time">${event.time}</p>
      </div>
    `;

    eventPreview.addEventListener("click", function() {
      window.location.href = 'event-details.php?id=' + event.id;
    });

    content.appendChild(eventPreview);
  }

  prevPageBtn.disabled = currentPage === 1;
  nextPageBtn.disabled = endIndex >= filteredEvents.length;
}


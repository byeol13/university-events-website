document.getElementById('showReservationsBtn').addEventListener('click', function() {
  var reservationsTable = document.getElementById('reservationsTableContainer');
  if (reservationsTable.style.display === 'none') {
      reservationsTable.style.display = 'block';
  } else {
      reservationsTable.style.display = 'none';
  }
});

document.getElementById('showAddEventForm').addEventListener('click', function() {
  var reservationsTable = document.getElementById('newEventForm');
  if (reservationsTable.style.display === 'none') {
      reservationsTable.style.display = 'block';
  } else {
      reservationsTable.style.display = 'none';
  }
});
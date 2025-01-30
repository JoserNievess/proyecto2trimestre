<x-app-layout>
    <!DOCTYPE html>
    <html lang="es"> <!-- Cambiar el idioma del documento a español -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calendario</title>
        <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@5.10.1/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales/es.js"></script> <!-- Agregar esta línea -->
    </head>
    <body class="bg-gray-100 text-gray-900">
        <div class="container mx-auto p-6">
            <h1 class="text-3xl font-bold text-center text-yellow-500 mb-6">Calendario de Cursos</h1>
            <div id="calendar" class="bg-white shadow-lg rounded-lg p-4"></div>
        </div>
    
        <!-- Modal para agregar evento -->
        <div id="eventModal" class="hidden fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <form id="eventForm">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Agregar Evento</h3>
                                    <div class="mt-2">
                                        <input type="hidden" id="eventDate" name="date">
                                        <div>
                                            <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
                                            <input type="text" name="title" id="title" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div>
                                            <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <textarea name="description" id="description" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">Guardar</button>
                            <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm" onclick="closeModal()">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
        <!-- Modal para mostrar detalles del evento -->
        <div id="eventDetailModal" class="hidden fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="eventDetailTitle"></h3>
                                <div class="mt-2">
                                    <p id="eventDetailDescription" class="text-sm text-gray-500"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="button" class="w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm" onclick="closeDetailModal()">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Modal para confirmar eliminación de evento -->
        <div id="deleteEventModal" class="hidden fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Confirmar Eliminación</h3>
                                <div class="mt-2">
                                    <p id="deleteEventTitle" class="text-sm text-gray-900"></p>
                                    <p id="deleteEventDescription" class="text-sm text-gray-500"></p>
                                    <p class="text-sm text-red-600 mt-2">¿Estás seguro de que deseas eliminar este evento?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" id="confirmDeleteButton">Eliminar</button>
                        <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px- 4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm" onclick="closeDeleteModal()">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var userRole = "{{ Auth::check() ? Auth::user()->role : 'GUEST' }}"; // Obtener el rol del usuario autenticado o 'GUEST' si no está autenticado
                
                if (calendarEl) {
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'dayGridMonth',
                        locale: 'es', // Establecer el idioma a español
                        editable: userRole !== 'GUEST', // Solo permitir edición si el usuario no es 'GUEST'
                        selectable: userRole !== 'GUEST',
                        events: "{{ route('calendar.events') }}",
                        dateClick: function(info) {
                            if (userRole === 'ADMIN' || userRole === 'EDITOR') {
                                document.getElementById('eventDate').value = info.dateStr;
                                document.getElementById('eventModal').classList.remove('hidden');
                            } else {
                                alert('No tienes permiso para agregar eventos.');
                            }
                        },
                        eventClick: function(info) {
                            if (userRole === 'ADMIN' || userRole === 'EDITOR') {
                                document.getElementById('deleteEventTitle').innerText = info.event.title;
                                document.getElementById('deleteEventDescription').innerText = info.event.extendedProps.description || 'No hay descripción disponible.';
                                document.getElementById('deleteEventModal').classList.remove('hidden');
                                document.getElementById('confirmDeleteButton').onclick = function() {
                                    deleteEvent(info.event.id);
                                };
                            } else {
                                // Mostrar detalles del evento
                                showEventDetails(info.event);
                            }
                        }
                    });
                    
                    calendar.render();
                } else {
                    console.error('El div #calendar no se encontró en el DOM');
                }
            });
    
            function showEventDetails(event) {
                document.getElementById('eventDetailTitle').innerText = event.title;
                document.getElementById('eventDetailDescription').innerText = event.extendedProps.description || 'No hay descripción disponible.';
                document.getElementById('eventDetailModal').classList.remove('hidden');
            }
    
            function closeDetailModal() {
                document.getElementById('eventDetailModal').classList.add('hidden');
            }
    
            function closeDeleteModal() {
                document.getElementById('deleteEventModal').classList.add('hidden');
            }
    
            function deleteEvent(eventId) {
                fetch("{{ route('calendar.destroy', '') }}/" + eventId, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }).then(response => response.json())
                  .then(data => {
                      if (data.success) {
                          location.reload();
                      } else {
                          alert('Error al eliminar el evento');
                      }
                  });
            }
    
            document.getElementById('eventForm').addEventListener('submit', function(event) {
                event.preventDefault();
                var formData = new FormData(event.target);
                fetch("{{ route('calendar.store') }}", {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }).then(response => response.json())
                  .then(data => {
                      if (data.success) {
                          location.reload();
                      } else {
                          alert('Error al guardar el evento');
                      }
                  });
            });
    
            function closeModal() {
                document.getElementById('eventModal').classList.add('hidden');
            }
        </script>
    </body>
    </html>
</x-app-layout>
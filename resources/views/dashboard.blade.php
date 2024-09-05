<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kanban') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white">
                    <!-- Kanban Board HTML -->
                    <div class="container mt-4">
                        <!-- Formulário para adicionar tarefas -->
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <input type="text" id="task-name" class="form-control" placeholder="Tarefa">
                            </div>
                            <div class="col-md-4">
                                <input type="text" id="task-responsible" class="form-control" placeholder="Pessoa responsável">
                            </div>
                            <div class="col-md-4">
                                <select id="task-urgency" class="form-control">
                                    <option value="success" class="text-success">Baixa Urgência</option>
                                    <option value="warning" class="text-warning">Média Urgência</option>
                                    <option value="danger" class="text-danger">Alta Urgência</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-3">
                                <button class="btn btn-primary" onclick="addTask()">Adicionar tarefa</button>
                            </div>
                        </div>

                        <!-- Quadro Kanban -->
                        <div class="kanban-board">
                            <div class="kanban-column" id="to-do">
                                <h4>To Do</h4>
                            </div>
                            <div class="kanban-column" id="in-progress">
                                <h4>In Progress</h4>
                            </div>
                            <div class="kanban-column" id="done">
                                <h4>Done</h4>
                            </div>
                        </div>
                    </div>

                    <!-- JavaScript -->
                    <script>
                        function addTask() {
                            const taskName = document.getElementById('task-name').value;
                            const taskResponsible = document.getElementById('task-responsible').value;
                            const taskUrgency = document.getElementById('task-urgency').value;

                            if (taskName === "" || taskResponsible === "") {
                                alert("Por favor, preencha todos os campos.");
                                return;
                            }

                            const taskCard = document.createElement('div');
                            taskCard.className = `card task-card border-${taskUrgency}`;
                            taskCard.innerHTML = `
                                <div class="card-body">
                                    <div class="task-header">
                                        <h5 class="card-title">${taskName}</h5>
                                        <span class="btn-color bg-${taskUrgency}"></span>
                                    </div>
                                    <p class="card-text">Responsável: ${taskResponsible}</p>
                                    <p class="card-text text-${taskUrgency}">Urgência: ${getUrgencyText(taskUrgency)}</p>
                                    <button class="btn btn-sm btn-secondary" onclick="moveTask(this, 'in-progress')">Mover para In Progress</button>
                                    <button class="btn btn-sm btn-success" onclick="moveTask(this, 'done')">Move para Done</button>
                                    <button class="btn btn-sm btn-danger" onclick="deleteTask(this)">Deletar</button>
                                </div>
                            `;

                            document.getElementById('to-do').appendChild(taskCard);

                            // Limpar campos após adicionar
                            document.getElementById('task-name').value = '';
                            document.getElementById('task-responsible').value = '';
                            document.getElementById('task-urgency').value = 'success';
                        }

                        function getUrgencyText(urgency) {
                            switch (urgency) {
                                case 'success':
                                    return 'Baixa';
                                case 'warning':
                                    return 'Média';
                                case 'danger':
                                    return 'Alta';
                                default:
                                    return 'Unknown';
                            }
                        }

                        function moveTask(button, columnId) {
                            const taskCard = button.parentElement.parentElement;
                            document.getElementById(columnId).appendChild(taskCard);
                        }

                        function deleteTask(button) {
                            const taskCard = button.parentElement.parentElement;
                            taskCard.remove();
                        }
                    </script>

                    <!-- Bootstrap JS and dependencies -->
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

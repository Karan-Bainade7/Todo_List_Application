// Add a confirmation prompt before deleting a task
document.addEventListener('DOMContentLoaded', function() {
    const deleteLinks = document.querySelectorAll('ul li a');

    deleteLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            if (!confirm('Are you sure you want to delete this task?')) {
                event.preventDefault();
            }
        });
    });

    // Strike-through tasks when they are clicked
    const tasks = document.querySelectorAll('ul li');

    tasks.forEach(function(task) {
        task.addEventListener('click', function() {
            this.classList.toggle('completed');
        });
    });
});
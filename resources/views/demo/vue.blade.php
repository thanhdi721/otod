@extends('layouts.app')

@section('title', 'Vue.js Demo - OTOD Web Layout UI')

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="mb-4">Vue.js Components Demo</h1>
    </div>
</div>

<div id="app">
    <!-- Counter Component -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Counter Component</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Simple Counter</h6>
                            <p>Count: {{ counter }}</p>
                            <button class="btn btn-primary me-2" @click="increment">Increment</button>
                            <button class="btn btn-secondary me-2" @click="decrement">Decrement</button>
                            <button class="btn btn-danger" @click="reset">Reset</button>
                        </div>
                        <div class="col-md-6">
                            <h6>Counter with Input</h6>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" v-model="stepValue" placeholder="Step value">
                                <button class="btn btn-outline-secondary" @click="incrementByStep">Add Step</button>
                            </div>
                            <p>Current step: {{ stepValue }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Todo List Component -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Todo List Component</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Add New Todo</h6>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" v-model="newTodo" @keyup.enter="addTodo" placeholder="Enter todo item">
                                <button class="btn btn-primary" @click="addTodo">Add</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Filter</h6>
                            <div class="btn-group" role="group">
                                <button class="btn btn-outline-primary" :class="{ active: filter === 'all' }" @click="filter = 'all'">All</button>
                                <button class="btn btn-outline-success" :class="{ active: filter === 'active' }" @click="filter = 'active'">Active</button>
                                <button class="btn btn-outline-secondary" :class="{ active: filter === 'completed' }" @click="filter = 'completed'">Completed</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-3">
                        <h6>Todo Items ({{ filteredTodos.length }})</h6>
                        <ul class="list-group">
                            <li v-for="(todo, index) in filteredTodos" :key="index" class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <input type="checkbox" class="form-check-input me-2" v-model="todo.completed">
                                    <span :class="{ 'text-decoration-line-through': todo.completed }">{{ todo.text }}</span>
                                </div>
                                <button class="btn btn-danger btn-sm" @click="removeTodo(index)">Delete</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Component -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Reactive Form Component</h5>
                </div>
                <div class="card-body">
                    <form @submit.prevent="submitForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" v-model="form.name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" v-model="form.email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" v-model="form.message" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-select" v-model="form.category">
                                <option value="">Select category</option>
                                <option value="general">General</option>
                                <option value="support">Support</option>
                                <option value="feedback">Feedback</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" v-model="form.newsletter">
                                <label class="form-check-label">Subscribe to newsletter</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                    <div class="mt-3" v-if="formSubmitted">
                        <div class="alert alert-success">
                            <h6>Form Submitted Successfully!</h6>
                            <pre>{{ JSON.stringify(formData, null, 2) }}</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Binding Demo -->
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Two-Way Data Binding</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Text Input</label>
                        <input type="text" class="form-control" v-model="bindingText">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Textarea</label>
                        <textarea class="form-control" v-model="bindingText" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Color Picker</label>
                        <input type="color" class="form-control" v-model="bindingColor">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Range Slider</label>
                        <input type="range" class="form-range" v-model="bindingRange" min="0" max="100">
                        <small class="text-muted">Value: {{ bindingRange }}</small>
                    </div>
                    
                    <div class="p-3 border rounded" :style="{ backgroundColor: bindingColor, color: getContrastColor(bindingColor) }">
                        <h6>Live Preview</h6>
                        <p>{{ bindingText || 'Type something above...' }}</p>
                        <p>Range value: {{ bindingRange }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Computed Properties</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">First Number</label>
                        <input type="number" class="form-control" v-model.number="num1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Second Number</label>
                        <input type="number" class="form-control" v-model.number="num2">
                    </div>
                    
                    <div class="alert alert-info">
                        <h6>Computed Results:</h6>
                        <p><strong>Sum:</strong> {{ sum }}</p>
                        <p><strong>Product:</strong> {{ product }}</p>
                        <p><strong>Average:</strong> {{ average }}</p>
                        <p><strong>Larger Number:</strong> {{ largerNumber }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('libs/vue/vue.js') }}"></script>
<script>
new Vue({
    el: '#app',
    data: {
        // Counter data
        counter: 0,
        stepValue: 1,
        
        // Todo data
        todos: [
            { text: 'Learn Vue.js', completed: false },
            { text: 'Build a demo app', completed: true },
            { text: 'Deploy to production', completed: false }
        ],
        newTodo: '',
        filter: 'all',
        
        // Form data
        form: {
            name: '',
            email: '',
            message: '',
            category: '',
            newsletter: false
        },
        formSubmitted: false,
        formData: null,
        
        // Binding data
        bindingText: 'Hello Vue.js!',
        bindingColor: '#007bff',
        bindingRange: 50,
        
        // Computed data
        num1: 10,
        num2: 20
    },
    computed: {
        filteredTodos() {
            switch(this.filter) {
                case 'active':
                    return this.todos.filter(todo => !todo.completed);
                case 'completed':
                    return this.todos.filter(todo => todo.completed);
                default:
                    return this.todos;
            }
        },
        sum() {
            return this.num1 + this.num2;
        },
        product() {
            return this.num1 * this.num2;
        },
        average() {
            return ((this.num1 + this.num2) / 2).toFixed(2);
        },
        largerNumber() {
            return Math.max(this.num1, this.num2);
        }
    },
    methods: {
        // Counter methods
        increment() {
            this.counter++;
        },
        decrement() {
            this.counter--;
        },
        reset() {
            this.counter = 0;
        },
        incrementByStep() {
            this.counter += parseInt(this.stepValue) || 1;
        },
        
        // Todo methods
        addTodo() {
            if (this.newTodo.trim()) {
                this.todos.push({
                    text: this.newTodo.trim(),
                    completed: false
                });
                this.newTodo = '';
            }
        },
        removeTodo(index) {
            this.todos.splice(index, 1);
        },
        
        // Form methods
        submitForm() {
            this.formData = { ...this.form };
            this.formSubmitted = true;
            
            // Reset form after 3 seconds
            setTimeout(() => {
                this.formSubmitted = false;
                this.form = {
                    name: '',
                    email: '',
                    message: '',
                    category: '',
                    newsletter: false
                };
            }, 3000);
        },
        
        // Utility methods
        getContrastColor(hexcolor) {
            // Convert hex to RGB
            const r = parseInt(hexcolor.substr(1, 2), 16);
            const g = parseInt(hexcolor.substr(3, 2), 16);
            const b = parseInt(hexcolor.substr(5, 2), 16);
            
            // Calculate luminance
            const luminance = (0.299 * r + 0.587 * g + 0.114 * b) / 255;
            
            return luminance > 0.5 ? '#000000' : '#ffffff';
        }
    }
});
</script>
@endsection

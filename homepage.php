<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgoraBoard - Modern Community Bulletin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <style>
        /* Calendar styles */
        .calendar {
            max-width: 700px;
            margin: auto;
        }
        .calendar table {
            width: 100%;
        }
        .calendar th, .calendar td {
            text-align: center;
            padding: 15px;
        }
        .calendar .today {
            background: #0d6efd;
            color: white;
            border-radius: 50%;
        }
        .calendar .event {
            background: #ffc107;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <i class="fas fa-bullhorn me-2"></i>AgoraBoard
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#announcements">Announcements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#categories">Categories</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <i class="fas fa-sign-in-alt me-1"></i>Login
                    </button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">
                        <i class="fas fa-user-plus me-1"></i>Register
                    </button>
                </div>
            </div>
        </div>
    </nav>

   <!-- Hero Section -->
    <section id="home" class="hero-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold text-dark mb-4">
                        Welcome to <span class="text-primary">AgoraBoard</span>
                    </h1>
                    <p class="lead text-muted mb-4">
                        Your modern community hub for announcements, events, and local updates. 
                        Stay connected with what matters most in your neighborhood.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <button class="btn btn-primary btn-lg">
                            <i class="fas fa-plus me-2"></i>Post Announcement
                        </button>
                        <button class="btn btn-outline-secondary btn-lg">
                            <i class="fas fa-search me-2"></i>Browse Posts
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="hero-image p-4">
                        <i class="fas fa-users display-1 text-primary mb-3"></i>
                        <h3 class="text-secondary">Community Connected</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


  
    <!-- Quick Stats -->
    <section class="stats-section py-4 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-card">
                        <h3 class="text-primary fw-bold">247</h3>
                        <p class="text-muted mb-0">Active Posts</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-card">
                        <h3 class="text-success fw-bold">89</h3>
                        <p class="text-muted mb-0">Upcoming Events</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-card">
                        <h3 class="text-warning fw-bold">156</h3>
                        <p class="text-muted mb-0">Community Members</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-card">
                        <h3 class="text-info fw-bold">12</h3>
                        <p class="text-muted mb-0">Categories</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="fw-bold text-dark">Browse by Category</h2>
                    <p class="text-muted">Find exactly what you're looking for</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="category-card h-100 p-4 rounded-3 shadow-sm">
                        <div class="text-center">
                            <i class="fas fa-calendar-alt fa-3x text-primary mb-3"></i>
                            <h4 class="fw-bold text-dark">Events</h4>
                            <p class="text-muted">Community gatherings, workshops, and celebrations</p>
                            <span class="badge bg-primary">23 posts</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card h-100 p-4 rounded-3 shadow-sm">
                        <div class="text-center">
                            <i class="fas fa-shield-alt fa-3x text-success mb-3"></i>
                            <h4 class="fw-bold text-dark">Public Safety</h4>
                            <p class="text-muted">Important safety alerts and community notices</p>
                            <span class="badge bg-success">8 posts</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card h-100 p-4 rounded-3 shadow-sm">
                        <div class="text-center">
                            <i class="fas fa-search fa-3x text-warning mb-3"></i>
                            <h4 class="fw-bold text-dark">Lost & Found</h4>
                            <p class="text-muted">Help reunite lost items with their owners</p>
                            <span class="badge bg-warning">15 posts</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card h-100 p-4 rounded-3 shadow-sm">
                        <div class="text-center">
                            <i class="fas fa-briefcase fa-3x text-info mb-3"></i>
                            <h4 class="fw-bold text-dark">Jobs</h4>
                            <p class="text-muted">Local job opportunities and career postings</p>
                            <span class="badge bg-info">31 posts</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card h-100 p-4 rounded-3 shadow-sm">
                        <div class="text-center">
                            <i class="fas fa-hands-helping fa-3x text-secondary mb-3"></i>
                            <h4 class="fw-bold text-dark">Volunteering</h4>
                            <p class="text-muted">Make a difference in your community</p>
                            <span class="badge bg-secondary">19 posts</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card h-100 p-4 rounded-3 shadow-sm">
                        <div class="text-center">
                            <i class="fas fa-poll fa-3x text-purple mb-3"></i>
                            <h4 class="fw-bold text-dark">Community Polls</h4>
                            <p class="text-muted">Have your voice heard on local issues</p>
                            <span class="badge bg-purple">7 polls</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Recent Announcements -->
    <section id="announcements" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="fw-bold text-dark">Recent Announcements</h2>
                    <p class="text-muted">Stay up to date with the latest community news</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="announcement-card p-4 rounded-3 shadow-sm bg-white">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <span class="badge bg-primary">Events</span>
                            <small class="text-muted">2 hours ago</small>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Community Clean-up Day</h5>
                        <p class="text-muted mb-3">Join us this Saturday for our monthly community clean-up initiative. Bring gloves and enthusiasm!</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex gap-3">
                                <small class="text-muted"><i class="fas fa-eye me-1"></i>45 views</small>
                                <small class="text-muted"><i class="fas fa-comment me-1"></i>8 comments</small>
                            </div>
                            <button class="btn btn-sm btn-outline-primary">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="announcement-card p-4 rounded-3 shadow-sm bg-white">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <span class="badge bg-success">Public Safety</span>
                            <small class="text-muted">5 hours ago</small>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Road Closure Notice</h5>
                        <p class="text-muted mb-3">Main Street will be closed for maintenance from 8 AM to 4 PM tomorrow. Please use alternate routes.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex gap-3">
                                <small class="text-muted"><i class="fas fa-eye me-1"></i>123 views</small>
                                <small class="text-muted"><i class="fas fa-comment me-1"></i>3 comments</small>
                            </div>
                            <button class="btn btn-sm btn-outline-primary">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Events Section with Calendar -->
    <section id="events" class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold text-dark mb-4">Community Events Calendar</h2>
            <div class="calendar bg-white shadow-sm p-4 rounded-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <button class="btn btn-outline-primary btn-sm" id="prevMonth">&lt;</button>
                    <h4 id="monthYear" class="mb-0"></h4>
                    <button class="btn btn-outline-primary btn-sm" id="nextMonth">&gt;</button>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                        </tr>
                    </thead>
                    <tbody id="calendarBody"></tbody>
                </table>
            </div>
        </div>
    </section>

        <!-- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="fw-bold mb-3">AgoraBoard</h5>
                    <p class="text-muted">Connecting communities through modern digital communication.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="text-muted mb-0">&copy; 2025 AgoraBoard. All rights reserved.</p>
                    <small class="text-muted">Developed by Grace Mae, Hendria & Nadine</small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Login Modal -->
    <!-- (kept same as yours) -->

    <!-- Register Modal -->
    <!-- (kept same as yours) -->

    <!-- Event Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Event Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="eventDetails">
                    <!-- Event details will be injected here -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple calendar JS
        const events = {
            "2025-08-23": "Community Clean-up Day at Central Park",
            "2025-08-28": "Local Farmers Market",
            "2025-09-02": "Back-to-School Night"
        };

        const monthYear = document.getElementById("monthYear");
        const calendarBody = document.getElementById("calendarBody");
        let today = new Date();
        let currentMonth = today.getMonth();
        let currentYear = today.getFullYear();

        function renderCalendar(month, year) {
            const firstDay = new Date(year, month).getDay();
            const daysInMonth = 32 - new Date(year, month, 32).getDate();

            monthYear.innerText = new Date(year, month).toLocaleString("default", { month: "long", year: "numeric" });
            calendarBody.innerHTML = "";

            let date = 1;
            for (let i = 0; i < 6; i++) {
                let row = document.createElement("tr");

                for (let j = 0; j < 7; j++) {
                    let cell = document.createElement("td");
                    if (i === 0 && j < firstDay) {
                        cell.innerHTML = "";
                    } else if (date > daysInMonth) {
                        break;
                    } else {
                        const fullDate = ${year}-${String(month + 1).padStart(2, "0")}-${String(date).padStart(2, "0")};

                        if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                            cell.classList.add("today");
                        }

                        if (events[fullDate]) {
                            cell.classList.add("event");
                            cell.setAttribute("data-event", events[fullDate]);
                            cell.addEventListener("click", function() {
                                document.getElementById("eventDetails").innerText = this.getAttribute("data-event");
                                new bootstrap.Modal(document.getElementById("eventModal")).show();
                            });
                        }
                        date++;
                    }
                    row.appendChild(cell);
                }
                calendarBody.appendChild(row);
            }
        }

        document.getElementById("prevMonth").addEventListener("click", () => {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            renderCalendar(currentMonth, currentYear);
        });

        document.getElementById("nextMonth").addEventListener("click", () => {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            renderCalendar(currentMonth, currentYear);
        });

        renderCalendar(currentMonth, currentYear);
    </script>
</body>
</html>

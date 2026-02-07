<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - DC Indo Global</title>
    
    <!-- Global CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .sidebar-link.active {
            background-color: #0A2540;
            color: #D4AF37;
            border-right: 4px solid #D4AF37;
        }
        .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.5rem;
            outline: none;
            transition: border-color 0.2s;
        }
        .form-input:focus {
            border-color: #0A2540;
            ring: 2px solid #0A2540;
        }
        .fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-xl hidden md:flex flex-col z-10">
            <div class="p-6 border-b border-gray-100 flex items-center gap-3">
                <div class="w-10 h-10 bg-[#0A2540] rounded-lg flex items-center justify-center text-[#D4AF37] font-bold text-xl">
                    DC
                </div>
                <h1 class="text-xl font-bold text-[#0A2540]">Admin Panel</h1>
            </div>

            <nav class="flex-1 overflow-y-auto py-4">
                <ul class="space-y-1">
                    <li>
                        <button onclick="switchTab('dashboard')" id="nav-dashboard" class="sidebar-link w-full text-left px-6 py-3 hover:bg-gray-50 flex items-center gap-3 transition-colors active">
                            <i class="fas fa-home w-5"></i>
                            <span>Dashboard</span>
                        </button>
                    </li>
                    <li>
                        <button onclick="switchTab('blogs')" id="nav-blogs" class="sidebar-link w-full text-left px-6 py-3 hover:bg-gray-50 flex items-center gap-3 transition-colors">
                            <i class="fas fa-blog w-5"></i>
                            <span>Blogs</span>
                        </button>
                    </li>
                    <li>
                        <button onclick="switchTab('services')" id="nav-services" class="sidebar-link w-full text-left px-6 py-3 hover:bg-gray-50 flex items-center gap-3 transition-colors">
                            <i class="fas fa-tools w-5"></i>
                            <span>Services</span>
                        </button>
                    </li>
                    <li>
                        <button onclick="switchTab('products')" id="nav-products" class="sidebar-link w-full text-left px-6 py-3 hover:bg-gray-50 flex items-center gap-3 transition-colors">
                            <i class="fas fa-box-open w-5"></i>
                            <span>Products</span>
                        </button>
                    </li>
                    <li>
                        <button onclick="switchTab('queries')" id="nav-queries" class="sidebar-link w-full text-left px-6 py-3 hover:bg-gray-50 flex items-center gap-3 transition-colors">
                            <i class="fas fa-envelope w-5"></i>
                            <span>Queries</span>
                        </button>
                    </li>
                </ul>
            </nav>

            <div class="p-4 border-t border-gray-100">
                <a href="/" class="flex items-center gap-3 text-gray-600 hover:text-[#0A2540] px-4 py-2 rounded-lg hover:bg-gray-50 transition-colors">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>

        <!-- Mobile Header -->
        <div class="md:hidden fixed w-full bg-white shadow-md z-20 p-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-[#0A2540]">DC Admin</h1>
            <button onclick="document.querySelector('aside').classList.toggle('hidden'); document.querySelector('aside').classList.toggle('absolute'); document.querySelector('aside').classList.toggle('h-full');" class="text-gray-600">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>

        <!-- Main Content -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6 md:p-8 pt-20 md:pt-8">
            
            <!-- Dashboard View -->
            <div id="view-dashboard" class="view-section fade-in">
                <header class="mb-8">
                    <h2 class="text-3xl font-bold text-[#0A2540]">Welcome Back, Admin</h2>
                    <p class="text-gray-500 mt-1">Here's what's happening with your website today.</p>
                </header>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Stat Card 1 -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm text-gray-500 font-medium">Total Blogs</p>
                                <h3 class="text-2xl font-bold text-[#0A2540] mt-1">12</h3>
                            </div>
                            <div class="p-2 bg-blue-50 text-blue-600 rounded-lg">
                                <i class="fas fa-blog"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Stat Card 2 -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm text-gray-500 font-medium">Active Services</p>
                                <h3 class="text-2xl font-bold text-[#0A2540] mt-1">8</h3>
                            </div>
                            <div class="p-2 bg-green-50 text-green-600 rounded-lg">
                                <i class="fas fa-tools"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Stat Card 3 -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm text-gray-500 font-medium">Products</p>
                                <h3 class="text-2xl font-bold text-[#0A2540] mt-1">24</h3>
                            </div>
                            <div class="p-2 bg-purple-50 text-purple-600 rounded-lg">
                                <i class="fas fa-box"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Stat Card 4 -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm text-gray-500 font-medium">New Queries</p>
                                <h3 class="text-2xl font-bold text-[#0A2540] mt-1">5</h3>
                            </div>
                            <div class="p-2 bg-orange-50 text-orange-600 rounded-lg">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Add View -->
            <div id="view-blogs" class="view-section hidden fade-in">
                <header class="mb-8 flex justify-between items-center">
                    <div>
                        <h2 class="text-3xl font-bold text-[#0A2540]">Manage Blogs</h2>
                        <p class="text-gray-500 mt-1">Add new blog posts or edit existing ones.</p>
                    </div>
                </header>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 max-w-4xl">
                    <h3 class="text-xl font-bold text-[#0A2540] mb-6 border-b pb-4">Add New Blog Post</h3>
                    <form onsubmit="event.preventDefault(); alert('Blog post added successfully!');" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Blog Title</label>
                                <input type="text" class="form-input" placeholder="Enter blog title" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                                <select class="form-input">
                                    <option>Construction</option>
                                    <option>Interior Design</option>
                                    <option>Renovation</option>
                                    <option>Tips & Tricks</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Featured Image</label>
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-[#0A2540] transition-colors cursor-pointer">
                                <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-2"></i>
                                <p class="text-sm text-gray-500">Click to upload or drag and drop</p>
                                <p class="text-xs text-gray-400 mt-1">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                <input type="file" class="hidden">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                            <textarea class="form-input h-48" placeholder="Write your blog content here..." required></textarea>
                        </div>

                        <div class="flex justify-end gap-4">
                            <button type="button" class="px-6 py-2.5 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">Cancel</button>
                            <button type="submit" class="px-6 py-2.5 rounded-lg bg-[#0A2540] text-white hover:bg-[#1E3A5F] transition-colors">Publish Post</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Service Add View -->
            <div id="view-services" class="view-section hidden fade-in">
                <header class="mb-8">
                    <h2 class="text-3xl font-bold text-[#0A2540]">Manage Services</h2>
                    <p class="text-gray-500 mt-1">Add new services to your portfolio.</p>
                </header>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 max-w-4xl">
                    <h3 class="text-xl font-bold text-[#0A2540] mb-6 border-b pb-4">Add New Service</h3>
                    <form onsubmit="event.preventDefault(); alert('Service added successfully!');" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Service Name</label>
                                <input type="text" class="form-input" placeholder="e.g., Residential Construction" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Icon Class (FontAwesome)</label>
                                <input type="text" class="form-input" placeholder="e.g., fas fa-home" required>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Service Image</label>
                            <input type="file" class="form-input p-2">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Short Description</label>
                            <textarea class="form-input h-32" placeholder="Brief description of the service..." required></textarea>
                        </div>

                        <div class="flex justify-end gap-4">
                            <button type="button" class="px-6 py-2.5 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">Cancel</button>
                            <button type="submit" class="px-6 py-2.5 rounded-lg bg-[#0A2540] text-white hover:bg-[#1E3A5F] transition-colors">Add Service</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Product Add View -->
            <div id="view-products" class="view-section hidden fade-in">
                <header class="mb-8">
                    <h2 class="text-3xl font-bold text-[#0A2540]">Manage Products</h2>
                    <p class="text-gray-500 mt-1">Add products to your catalog.</p>
                </header>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 max-w-4xl">
                    <h3 class="text-xl font-bold text-[#0A2540] mb-6 border-b pb-4">Add New Product</h3>
                    <form onsubmit="event.preventDefault(); alert('Product added successfully!');" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Product Name</label>
                                <input type="text" class="form-input" placeholder="e.g., Premium Cement Grade A" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Price (₹)</label>
                                <input type="number" class="form-input" placeholder="e.g., 450" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                                <select class="form-input">
                                    <option>Building Materials</option>
                                    <option>Tools & Equipment</option>
                                    <option>Finishing Materials</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Stock Status</label>
                                <select class="form-input">
                                    <option>In Stock</option>
                                    <option>Out of Stock</option>
                                    <option>Pre-order</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Product Image</label>
                            <input type="file" class="form-input p-2">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                            <textarea class="form-input h-32" placeholder="Product specifications and details..." required></textarea>
                        </div>

                        <div class="flex justify-end gap-4">
                            <button type="button" class="px-6 py-2.5 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">Cancel</button>
                            <button type="submit" class="px-6 py-2.5 rounded-lg bg-[#0A2540] text-white hover:bg-[#1E3A5F] transition-colors">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Queries View -->
            <div id="view-queries" class="view-section hidden fade-in">
                <header class="mb-8">
                    <h2 class="text-3xl font-bold text-[#0A2540]">User Queries</h2>
                    <p class="text-gray-500 mt-1">View and manage contact form submissions.</p>
                </header>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead class="bg-gray-50 text-gray-600 uppercase text-xs">
                                <tr>
                                    <th class="p-4 border-b">ID</th>
                                    <th class="p-4 border-b">Name</th>
                                    <th class="p-4 border-b">Email</th>
                                    <th class="p-4 border-b">Subject</th>
                                    <th class="p-4 border-b">Date</th>
                                    <th class="p-4 border-b">Status</th>
                                    <th class="p-4 border-b">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="p-4 border-b text-gray-500">#1024</td>
                                    <td class="p-4 border-b font-medium text-[#0A2540]">Rahul Sharma</td>
                                    <td class="p-4 border-b text-gray-600">rahul.s@example.com</td>
                                    <td class="p-4 border-b text-gray-600">Quotation for Villa Construction</td>
                                    <td class="p-4 border-b text-gray-500">Oct 24, 2025</td>
                                    <td class="p-4 border-b">
                                        <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs font-semibold">New</span>
                                    </td>
                                    <td class="p-4 border-b">
                                        <button class="text-blue-600 hover:text-blue-800 font-medium">View</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="p-4 border-b text-gray-500">#1023</td>
                                    <td class="p-4 border-b font-medium text-[#0A2540]">Priya Singh</td>
                                    <td class="p-4 border-b text-gray-600">priya.singh@example.com</td>
                                    <td class="p-4 border-b text-gray-600">Interior Design Inquiry</td>
                                    <td class="p-4 border-b text-gray-500">Oct 23, 2025</td>
                                    <td class="p-4 border-b">
                                        <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full text-xs font-semibold">Pending</span>
                                    </td>
                                    <td class="p-4 border-b">
                                        <button class="text-blue-600 hover:text-blue-800 font-medium">View</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="p-4 border-b text-gray-500">#1022</td>
                                    <td class="p-4 border-b font-medium text-[#0A2540]">Amit Patel</td>
                                    <td class="p-4 border-b text-gray-600">amit.p@example.com</td>
                                    <td class="p-4 border-b text-gray-600">Commercial Project Timeline</td>
                                    <td class="p-4 border-b text-gray-500">Oct 22, 2025</td>
                                    <td class="p-4 border-b">
                                        <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs font-semibold">Replied</span>
                                    </td>
                                    <td class="p-4 border-b">
                                        <button class="text-blue-600 hover:text-blue-800 font-medium">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="p-4 border-t border-gray-100 flex justify-between items-center">
                        <span class="text-xs text-gray-500">Showing 3 of 50 queries</span>
                        <div class="flex gap-2">
                            <button class="px-3 py-1 border rounded hover:bg-gray-50 text-xs">Previous</button>
                            <button class="px-3 py-1 border rounded hover:bg-gray-50 text-xs">Next</button>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <script>
        function switchTab(tabName) {
            // Hide all views
            const views = document.querySelectorAll('.view-section');
            views.forEach(view => {
                view.classList.add('hidden');
            });

            // Show selected view
            const selectedView = document.getElementById('view-' + tabName);
            if (selectedView) {
                selectedView.classList.remove('hidden');
            }

            // Update sidebar active state
            const navLinks = document.querySelectorAll('.sidebar-link');
            navLinks.forEach(link => {
                link.classList.remove('active');
            });

            const activeLink = document.getElementById('nav-' + tabName);
            if (activeLink) {
                activeLink.classList.add('active');
            }
        }
    </script>
</body>
</html>

# Project Abronex Global - Team 13

##  Project Description
We have created this platform to make studying abroad accessible, transparent, and manageable for every student seeking reliable assistance. Abronex Global serves as a **one-stop digital solution** for all educational needs—from English language test preparation to university selection and visa applications.

**Our Inspiration & Industry Alignment:**
This project is deeply personal. The core idea was born from our shared, firsthand experiences navigating the complex journey of becoming international students. Furthermore, the platform's architecture, business logic, and service flow are heavily driven by the professional background of our teammate, **Sandesh Bishokarma**, who brings over two years of industry experience working as an Educational Consultant. 

**The "No Sugar-Coating" Philosophy:**
Our primary mission is to provide a transparent, scalable platform that cuts through the noise of traditional consultancies. We prioritize:
1. **Budget-Tailored Fit:** Recommending the best-fit colleges, universities, and destination countries strictly aligned with a student's personal financial capacity.
2. **Information Integrity:** Ensuring a "no sugar-coating" approach by sourcing legitimate, up-to-date information directly from official channels (e.g., *studyinfo.fi*, the *Australian High Commission*, and official university portals).

**🚀 Future Scope & Scalability:**
The current modular architecture was built with future scalability in mind. Our long-term vision is to integrate an **AI-powered recommendation engine** into this platform to automate and optimize the process of matching students to their ideal, budget-friendly educational destinations.

---

## Table of Contents
1. [Features](#features)
2. [Database Tables](#database-tables)
3. [Created Forms](#created-forms)
4. [Created Tables](#created-tables)
5. [System Architecture & Technical Milestones](#system-architecture--technical-milestones)

---

## Features

- [x] **Feature 1 (Tanka Raj Aryal):** Free Consultation & Student Profiling
- [x] **Feature 2 (Anup Kandel):** "Starting Journey" Preference Matching
- [x] **Feature 3 (Sandesh Bishokarma):** "Get In Touch" Expert Lead Management

### Feature 1 (Tanka Raj Aryal): Free Consultation
Allows collecting student details like name, academics, and test scores to understand counseling needs. It helps students easily identify preferred countries and ensures they agree to terms and privacy rules.
* **Code:** [GitHub - Application Folder](https://github.com/Acidburn07/AbronexGlobal-PHP/tree/main/Application)
* **Live Shell Link:** [Application Form](http://shell.hamk.fi/~amk1010360/AbronexGlobal-PHP/Application/application.php)

### Feature 2 (Anup Kandel): "Starting Journey"
Inspired by personal experiences as an international student in Finland. This feature provides guidance in selecting a college and course based on personal preferences. It notifies students when a suitable college/course is available, saving time and preventing irrelevant consultancy visits.
* **Code:** [GitHub - GettingStarted Folder](https://github.com/Acidburn07/AbronexGlobal-PHP/tree/main/gettingstarted)
* **Live Shell Link:** [Journey Form](http://shell.hamk.fi/~amk1010362/AbronexGlobal-PHP/gettingstarted/gettingstarted.php)

### Feature 3 (Sandesh Bishokarma): Get In Touch
A direct inquiry module for students to reach out to experts. It features localized form validation and database integration to securely capture and manage student leads and queries.
* **Code:** [GitHub - GetInTouch Folder](https://github.com/Acidburn07/AbronexGlobal-PHP/tree/main/getintouch)
* **Live Shell Link:** [Get In Touch Form](http://shell.hamk.fi/~bbcap25_13/projectabronex/getintouch/getintouch.php)

---

## Database Tables

| Table Name | Created By | Description |
| :--- | :--- | :--- |
| `student_application` | Tanka Raj Aryal | Stores academic profiles, language test scores, and consultation queries. |
| `student_preferences` | Anup Kandel | Stores student journey preferences, budget constraints, and notification settings. |
| `getintouch` | Sandesh Bishokarma | Stores direct contact inquiries, expert lead data, and user messages. |

---

## Created Forms

* **Form 1 (Tanka Raj Aryal): Free Consultation** * **Fields:** Fullname, Query, Academic Profile, Language Test, Preferred Country, Nearest Branch, Consent.
  * **Links:** [GitHub Code](https://github.com/Acidburn07/AbronexGlobal-PHP/blob/main/Application/application.php) | [Live Shell](http://shell.hamk.fi/~amk1010360/AbronexGlobal-PHP/Application/application.php)
  * **Validations Applied:** Required fields, email formatting.

* **Form 2 (Anup Kandel): Start Your Journey** * **Fields:** Full name, Email, Phone, Target Destination, Desired Program, College Type, Tuition Budget, Notify Via, Message.
  * **Links:** [GitHub Code](https://github.com/Acidburn07/AbronexGlobal-PHP/blob/main/gettingstarted/gettingstarted.php) | [Live Shell](http://shell.hamk.fi/~amk1010362/AbronexGlobal-PHP/gettingstarted/gettingstarted.php)
  * **Validations Applied:** Phone number numeric check, required dropdown selections.

* **Form 3 (Sandesh Bishokarma): Get In Touch** * **Fields:** Name, Email, Phone, Subject, Message.
  * **Links:** [GitHub Code](https://github.com/Acidburn07/AbronexGlobal-PHP/blob/main/getintouch/getintouch.php) | [Live Shell](http://shell.hamk.fi/~bbcap25_13/projectabronex/getintouch/getintouch.php)
  * **Validations Applied:** Server-side sanitization (`htmlspecialchars`, `mysqli_real_escape_string`), empty field prevention.

---

## Created Tables (Data Display)

* **Table 1 (Tanka Raj Aryal): Application Log** | [GitHub Code](https://github.com/Acidburn07/AbronexGlobal-PHP/blob/main/Application/process.php) | Displays submitted consultation requests.
* **Table 2 (Anup Kandel): Preference Log** | [GitHub Code](https://github.com/Acidburn07/AbronexGlobal-PHP/blob/main/gettingstarted/process.php) | Displays user budget and course preferences.
* **Table 3 (Sandesh Bishokarma): Inquiry Inbox** | [GitHub Code](https://github.com/Acidburn07/AbronexGlobal-PHP/blob/main/getintouch/process.php) | Displays secure messages sent via the Get In Touch form.

---

## System Architecture & Technical Milestones

### 📂 Directory Structure
To ensure scalability for our future AI integration, the project is structured as a Modular Monolith:
```text
projectabronex/
├── assets/             # Global Images and CSS (Tailwind)
├── includes/           # Shared UI Components (header.php, footer.php, navbar.php)
├── Application/        # Feature 1 Module (Consultation logic & DB)
├── gettingstarted/     # Feature 2 Module (Journey Planner logic & DB)
├── getintouch/         # Feature 3 Module (Contact lead logic & DB)
├── index.php           # Root Landing Page
├── tailwind.config.js  # Tailwind CSS Configuration
└── README.md           # Project Documentation

###  Project Milestone: System Architecture & Version Control Mastery (Sandesh Bishokarma)
To guarantee deployment stability on the HAMK shell production environment, the project repository underwent a rigorous architectural audit and synchronization process. 

* **Architectural Refactoring:** Centralized shared UI components (Header, Footer, Navbar) into a dedicated `/includes` directory. This strict adherence to **DRY (Don't Repeat Yourself)** principles drastically reduced code redundancy and streamlined global styling updates.
* **Dynamic Asset Pathing:** Engineered a robust, root-relative absolute pathing system for global navigation components. This permanently eliminated `404 Not Found` errors for static assets (e.g., logos, Tailwind CSS) and ensured seamless UI rendering across all nested application modules, regardless of folder depth.
* **Advanced Git Conflict Resolution:** Led the repository recovery during critical desynchronization events. Successfully untangled recursive directory structures (accidental nested roots) and mitigated `non-fast-forward` merge collisions. Utilized advanced Git operations (`--allow-unrelated-histories`, `git pull --rebase`) to unify divergent branches and preserve a clean, linear commit history for Team 13.

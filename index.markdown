---
layout: home
title: "Presentation 🖋️" 
---

<div class="header">
  <p>Passionate about technology and software development, my name is Maxim Joseau. I am a Full-Stack developer (Ruby on Rails, Java / Spring Boot, React) with a Master's degree (bac +5) in Computer Engineering, currently working for <a href="https://ouidou.fr/" target="_blank">Ouidou</a>.</p>
</div>

## Informations 📓

| [![Email](https://img.icons8.com/ios-glyphs/30/000000/email.png)](mailto:maxim.joseau@gmail.com) | [![GitHub](https://img.icons8.com/ios-glyphs/30/000000/github.png)](https://github.com/yhru) | **Experience** | **Location**    |
|------------------------------|----------------------------------|-------------------|-----------------|
| maxim.joseau@gmail.com       | [github.com/yhru](https://github.com/yhru) | 5+ years             | Lille - Paris   |


## Skills 👨‍💻 ⚙️

### Technical Skills

```json
{
  "Backend Technologies": {
    "Languages & Frameworks": [
      "Ruby",
      "Ruby on Rails",
      "Java",
      "Spring Boot"
    ],
    "Databases": [
      "PostgreSQL",
      "MySQL",
      "Azure SQL Database",
      "Redis",
      "MongoDB"
    ],
    "Cloud": [
      "Azure (Blob Storage, Document Intelligence, Entra ID)"
    ],
    "APIs": [
      "REST",
      "GraphQL"
    ]
  },
  "Tools & Methodologies": {
    "Version Control": [
      "Git (GitHub, GitLab)",
      "GitLab CI/Actions",
      "Docker",
      "Kubernetes"
    ],
    "Methodologies": [
      "Scrum",
      "Kanban",
      "BMAD",
      "AI-assisted development (Claude Code)",
      "Jira"
    ],
    "Testing & Quality": [
      "RSpec (Unit, Integration, End-to-End)",
      "Capybara",
      "TDD (JUnit, Testcontainers, Vitest)",
      "Code Review",
      "Linting",
      "Sonar",
      "Sentry"
    ]
  },
  "Frontend & Mobile": [
    "React",
    "TypeScript",
    "Vue.js",
    "Flutter",
    "Hotwire",
    "Bootstrap",
    "Tailwind",
    "Jekyll"
  ]
}
```

### Soft Skills
```json
[
  "Communication",
  "Teamwork",
  "Adaptability",
  "Versatility",
  "Technical Documentation",
  "Client Relations"
]
```

## Professional Experience

### **1. LDC – Marie (via Ouidou) - Ruby on Rails / Flutter Tech Lead**
**Period:** September 2026 - October 2026

**Project:** Compliance upgrade of Frigo'Co, the connected fridge solution of the Marie brand (LDC group): a Rails API, a Vue.js back-office and a Flutter iOS/Android mobile app. The goal was to meet the new Google Play requirement (target Android 16 / API 36) and replace the discontinued Firebase Dynamic Links. Fixed-price project delivered in a short sprint with a team of 3 developers.

**Key Achievements:**
- Technical lead of the sprint: scoping, split into 3 work packages (API 36 upgrade, native deep links, CI and publishing), story assignment and follow-up of client prerequisites
- Flutter upgrade 2.8 → 3.32 → 3.44 and Android API 36 target (Gradle, AGP, Kotlin, NDK, edge-to-edge display)
- Set up a lightweight BMAD method (target architecture note and versioned stories in the repo) to parallelize AI-assisted development (Claude Code)
- Production releases of the API and back-office, App Store and Play Store submission with staged rollout
- Documentation writing (developer onboarding, architecture, client prerequisites) and client communication

**Environment:** Ruby, Flutter, PostgreSQL, Redis, Vue.js, GitLab, Sentry
> &nbsp;

---

### **2. PACTP (via Ouidou) - Full-Stack Java / React Developer**
**Period:** May 2025 - October 2026

**Project:** Complete overhaul of PACTP's information system to manage the show contribution (CVE) with member theaters. The platform includes a member portal and an admin back-office: show declarations, payouts, invoices and balances, journals, rate and notification settings. Batch jobs handle accounting synchronization, purging and data migration. The project followed the BMAD method (analysis → planning → architecture → stories) with AI-assisted development (Claude Code).

**Key Achievements:**
- Full-stack development of user stories, from the Spring Boot back-end to the React front-end, using TDD (unit tests and Testcontainers integration tests)
- Accounting integration with the Pennylane API: journal entries, per-theater allocation accounts, live balances, replay of failed synchronizations
- Automatic reading of slips via OCR (Azure Document Intelligence) and storage of supporting documents on Azure Blob Storage
- Role-based authentication and authorization (Spring Security, JWT, OAuth2 / Microsoft Entra ID), emails sent through Microsoft Graph
- Data migration from the legacy portal: migration scripts (FEC, dumps), consistency checks on caps and balances, staging acceptance testing, cutover runbook
- Production go-live: GitLab CI/CD, Docker images (Jib), Kubernetes deployment on staging and docker-compose on a VM in production, secrets moved to environment variables
- Code reviews (DRY, KISS, SOLID, YAGNI), sprint follow-up and post-acceptance fixes with the client

**Environment:** Java, Spring Boot, PostgreSQL, React, TypeScript, Vite, Tailwind CSS, Vitest, Azure, GraphQL, Docker, GitLab, Claude
> &nbsp;

---

### **3. Adullact (via Ouidou) - Ruby on Rails Developer**
**Period:** 2025

**Project:** Version upgrade management and incident resolution on Démarches Simplifiées (Ruby on Rails monolithic application) and its fork mes-démarches. Development of new features and bug fixes on these platforms. Technical and business onboarding.

**Key Achievements:**
- Led multiple version upgrades by fetching upstream to update the tool and ensure its security
- Resolved bugs and incidents, ensuring platform stability
- Contributed to code quality improvement through code reviews and implementation of unit and integration tests
- Collaborated with product teams and other developers to optimize application performance
- Technical and business onboarding of the solution
- Technical documentation writing
- Technical and functional client presentations

**Environment:** Ruby on Rails, PostgreSQL, Docker, GitLab CI
> &nbsp;

---

### **4. IDT (Mes-Démarches via Ouidou) - Ruby on Rails Developer**
**Period:** 2025

**Project:** Polynesian fork of the Démarches Simplifiées project. Development of new features and bug fixes, as well as version upgrades.

**Key Achievements:**
- Development of Polynesia-specific features, such as decree generation via the Lexpol tool
- Integration of a new Baserow field to collect structured data more efficiently
- Implementation of a custom geographical map adapted to the Polynesian context to visualize procedures
- Technical and business onboarding of the solution
- Technical documentation writing
- Technical and functional client presentations
- Client relationship management

**Environment:** Ruby on Rails, PostgreSQL, Docker, GitHub Actions
> &nbsp;

---

### **5. L'Etudiant (Study Advisor via Ouidou) - Ruby on Rails Developer**
**Period:** 2024

**Project:** Migration of the Study Advisor monolithic Ruby on Rails application to a service-oriented architecture, divided into several distinct applications (back-office, front-end, API). Development of new features for the platform.

**Key Achievements:**
- Decomposed and refactored a monolithic application into multiple components (API, back-office, front-end)
- Developed new features in Ruby on Rails to improve user experience and platform efficiency
- Contributed to code quality improvement through code reviews and implementation of unit and integration tests
- Technical documentation writing to facilitate onboarding for other developers
- Collaborated with L'Étudiant teams to ensure new features precisely met their expectations

**Environment:** Ruby on Rails, PostgreSQL, Docker, GitLab CI
> &nbsp;

---

### **6. Juridic Ways (via Tymate) - Ruby on Rails Developer**
**Period:** 2023

**Project:** Design and development of a digital platform to simplify the estate settlement process for legal professionals (notaries, lawyers).

**Key Achievements:**
- Designed and prototyped the platform from scratch
- Developed a platform enabling data entry, visualization of settlement scenarios, and export of PDF documents
- Implemented a robust architecture to support remote work and real-time collaboration
- Participated in all project stages, from needs analysis to production deployment

**Environment:** Ruby on Rails, PostgreSQL, REST API, GitHub
> &nbsp;

---

### **7. Réseau Initiative France (via Tymate) - Ruby on Rails Developer**
**Period:** 2023

**Project:** Development of the Ruby on Rails API for the Réseau Initiative France mobile application, designed to help entrepreneurs launch their projects.

**Key Achievements:**
- Designed the API to manage document progression, statuses, and information needed by entrepreneurs
- Developed Ruby on Rails endpoints for the mobile application
- Collaborated with front-end teams to ensure smooth and efficient integration

**Environment:** Ruby on Rails, PostgreSQL, REST API, GraphQL, GitHub
> &nbsp;

---

### **8. Le Registre (via Tymate) - Ruby on Rails Developer**
**Period:** 2023

**Project:** Contribution to the development and maintenance of a notarial application aimed at digitalizing document management and facilitating transactions via blockchain.

**Key Achievements:**
- Contributed to document virtualization
- Developed new features
- Resolved technical bugs
- End-to-end and unit testing

**Environment:** Ruby on Rails, PostgreSQL, GraphQL
> &nbsp;

---

### **9. Boulanger - SAP Developer Internship**
**Period:** November 2020 - 2021

**Responsibilities:**
- Developed and maintained projects within the SAP environment
- Led the creation, SEO optimization, and maintenance of high-traffic websites:
    - [All You Need](https://allyouneed-rh.fr)
    - [e-Darwin](https://e-darwin.fr)

> &nbsp;

---

### **10. All You Need - Developer & Project Manager**
**Period:** January 2020 - March 2020

**Responsibilities:**
- Played a pivotal role in the design and development of this website

> &nbsp;

---

### **11. CITC - Developer Internship**
**Period:** May 2019 - June 2019

**Responsibilities:**
- Developed and launched a fully functional website: [iotcluster.fr](https://iotcluster.fr)

> &nbsp;

---

## Education

### **EPSI Lille - 2021 / 2023**
- **Degree:** Expert in Computer Science and Information Systems
- **Level:** Master's Degree (Bac+5) in Computer Engineering
- **Highlights:** Completed advanced coursework and projects, enhancing expertise in software development and system architecture.
> &nbsp;

### **EPSI Lille - 2018 / 2021**
- **Degree:** Application Developer & BTS SIO
- **Level:** Bachelor's Degree (Bac+3) in DevOps - CDA
- **Details:** Completed a 2-year apprenticeship focusing on team management and the development of GraphQL and REST APIs, and Back Office solutions in Rails for varied clientele.
> &nbsp;

---

## Personal Projects 🛠️

1. **Book Club**  
    - **Technologies:** Ruby on Rails - GraphQL - PostgreSQL
    - **Description:** Developed a dynamic book club platform, enabling users to share and discuss books seamlessly.
    > &nbsp;

2. **Media Library with Image Recognition**  
    - **Technologies:** SpringBoot
    - **Description:** Created an intelligent media library system incorporating advanced image recognition features for enhanced user experience.
    > &nbsp;

3. **Lille Lettrée, Library Project**  
    - **Technologies:** PHP
    - **Description:** Designed and implemented a comprehensive library management system, facilitating efficient book tracking and management.
    > &nbsp;

4. **Mobile App for QR Code Scanning**  
    - **Technologies:** React - Firebase
    - **Description:** Built a mobile application that utilizes QR code scanning for quick and easy information retrieval.
    > &nbsp;



## Interests ♟️
```
- Chess
- Typing
- Web Dev
- Skate
- Climbing
- Badminton
```

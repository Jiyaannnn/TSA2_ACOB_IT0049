# TSA2 screenshot checklist

Each file in `docs/evidence/` is a real capture from the application running locally at `http://localhost:8088/`. The report crops those captures for page layout.

| Figure | Page / file | What must be visible | Caption | Short explanation |
| --- | --- | --- | --- | --- |
| 1 | `/` · `01-today.png` | Public header, Today hero, print shop concept | Public Today page | Introduces the shop and daily work. |
| 2 | `/tasks` · `02-task-board.png` | Public header, board hero, task count | Public task board | Guests can browse active tasks. |
| 3 | `/login` · `05-sign-in.png` | Username and password fields, sign-in button | Staff sign-in page | Entry point for protected actions. |
| 4 | `/tasks` after login · `06-task-board-signed-in.png` | Signed-in header and welcome message | Authenticated task board | Staff session unlocks management navigation. |
| 5 | `/tasks/new` · `07-new-task-full.png` | Title, scheduled date, status, submit action | New-task form | Required fields and task state. |
| 6 | `/profile` · `03-profile.png` | Creator name and academic details | Creator profile | Personalized student identity. |
| 7 | `/about` · `04-about.png` | About hero and shop description | About the shop | Explains the concept behind Ledgerline. |
| 8 | `/` signed in · `staff/02-today-signed-in.png` | Staff navigation and Today hero | Today page with staff navigation | The public landing page is available during a staff session. |
| 9 | `/` signed in, scrolled · `staff/09-today-work-signed-in.png` | Daily progress, tasks, status, Edit actions | Today work list with Edit actions | Staff can manage scheduled work from Today. |
| 10 | `/tasks` signed in · `staff/01-task-board-signed-in.png` | Welcome message, task count, New task | Signed-in task board overview | The board exposes management controls. |
| 11 | `/tasks` signed in, scrolled · `staff/10-task-board-controls-signed-in.png` | Search, filters, task rows, Edit links | Task board controls and records | The controls and records are visible together. |
| 12 | `/tasks/new` signed in · `staff/03-new-task-signed-in.png` | Title, date, status, Create task | New-task form after sign-in | Staff can add a dated task. |
| 13 | `/tasks/{id}/edit` signed in · `staff/04-edit-task-signed-in.png` | Filled fields, Save changes, Archive task | Edit-task form and Archive action | Staff can revise or archive a task. |
| 14 | `/customers` signed in · `staff/05-customers-signed-in.png` | Customer records, New customer, Edit | Customer directory after sign-in | Preserved customer data and controls. |
| 15 | `/users` signed in · `staff/06-staff-directory-signed-in.png` | Staff records, New user, Edit | Staff directory after sign-in | Preserved staff data and controls. |
| 16 | `/profile` signed in · `staff/07-profile-signed-in.png` | Staff navigation, creator name and details | Creator profile with staff navigation | Personalized creator identity. |
| 17 | `/about` signed in · `staff/08-about-signed-in.png` | Staff navigation, About hero | About page with staff navigation | Shop concept and signed-in state. |
| 18 | `/tasks` at 390px · `10-mobile-task-board.png` | Compact header, task hero, count | Mobile task board | Shows the board layout at phone width. |
| 19 | `/` at 390px · `11-mobile-today.png` | Today hero and actions | Mobile Today page | Shows the landing page layout at phone width. |
| 20 | `/profile` at 390px · `12-mobile-profile.png` | Creator card and details | Mobile creator profile | Shows the profile layout at phone width. |
| 21 | `/about` at 390px · `13-mobile-about.png` | Shop story and paper art | Mobile About page | Shows the concept layout at phone width. |
| 22 | `/login` at 390px · `14-mobile-login.png` | Username, password, and sign-in action | Mobile sign-in page | Shows the complete form at phone width. |

Figures 1–17 are in the revised DOCX report. Figures 18–22 are supplemental mobile captures. The report uses cropped versions of the genuine browser screenshots; complete captures remain in `docs/evidence/`. The validation and archive results are recorded in the report's verification table from HTTP and database checks. No validation screenshot is presented because the browser capture for that state was not reliable.

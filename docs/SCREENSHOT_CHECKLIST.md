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

The validation and archive results are recorded in the report's verification table from HTTP and database checks. No validation screenshot is presented because the browser capture for that state was not reliable.

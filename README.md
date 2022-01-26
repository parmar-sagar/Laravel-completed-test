# Laravel Test

This is a Laravel project to see your skills and attitudes for web development. Please take this test as if it's a real project.

## Instructions
1. Read this documentation.
2. Let us know your due date. The due date is totally up to your schedule.
3. Clone this repository to your local.
4. IMPORTANT: Change the remote repository to your own public repository.
5. Develop following specifications.
6. Write documentation if you have something to tell us.
7. Pull your modifications to your remote repository.

## Specifications
- Implement home route and all routes for the Post model.
- All users including guest users can see the list and details of posts.
- Post model has some statuses, Draft, Members Only and Future. Read the attributes below authorize users properly.
- Only logged-in users can add new posts.
- Only the author can edit/update/delete posts. Authorize users properly.
- Validate posted data when store/update posts.
- Write tests to make your program reliable.

#### Attributes of Post Model
- title: string, max 100 characters
- content: string, max 50,000 characters, may contain line breaks
- is_draft: If true, the post is draft. Only the author can see and edit the post. No one else can see it.
- is_members_only: If true, only logged-in users can see the post. Guest users can't see it.
- posted_at: Posted date and time. If future date is set, the post will not be shown until the time.

## Evaluations
What skills we evaluate are:

- Programming: Write readable and maintainable codes. Divide classes and methods appropriately.
- Understanding Laravel: Use Laravel functionalities and follow "Laravel way" efficiently.
- Scheduling: Meet the deadline that you set.
- Attitude for team development: Be considerate of other development members, such as documentation, commit messages, annotations in your codes.
- Communication: Have communication appropriately. Ask us if you have something unclear or problems.

-----
Write your documentation below.

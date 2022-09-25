<p align="center">
    <img align="center" src="https://www.leslivresblancs.fr/sites/default/files/iconosquare-logo.png">
</p>

# Iconosquare Interview Test - Laravel

### Instructions

- Fork this repo to your github account
- Don't forget to create your own .env file at the root folder (you can just copy the example)
- Complete the tasks given
- Once completed, create a PR to this repository

### Tasks

Making a simple Blog CRUD API in json

- Create a Post migration and model, a Post contains a title, a slug, a content, an author (just a string for simplicity), a publish date, a draft status
- Create a BlogController that will contains all the business logic for our endpoints
- Make an endpoint for listing all blogposts, sorted by the most recent first, hiding the drafts by default
- Make an endpoint for creating a blog post
- Make an endpoint for editing a blog post
- Make an endpoint for removing a blog post

### Bonus

- Unit/Feature tests
- Pagination
- sql optimization (indexes etc.)
# CONTRIBUTING

Contributions are always welcome, no matter how large or small. 

Some thoughts to help you contribute to this project

## Table Of Contents

- [1.0 Guidelines](#guidelines)
- [2.0 PHP Style](#background)
- [3.0 Documentation](#install)
- [4.0 Compatability](#usage)
- [5.0 Branching](#api)
- [6.0 Issues](#maintainers)
- [7.0 Recommended Communication Style](#contributing)
- [8.0 PR Validation](#license)
- [9.0 Work in progress](#WIP)
- [9.0 Setup](#Setup)
- [9.0 Setup Debugger](#Debugger)
- [10.0 Testing](#Testing)
- [11.0 Coding Tips](#CodingTips)
- [12.0 Pull Requests](#PullRequests)
- [13.0 Coding Tips](#CodingTips)
- [14.0 License](#License)

## 1.0 Guidelines

Before we look into how, here are the guidelines. If your Pull Requests fail
to pass these guidelines it will be declined and you will need to re-submit
when you’ve made the changes. This might sound a bit tough, but it is required
for us to maintain quality of the code-base.

### 2.0 PHP Style

All code must meet the [Style Guide](https://codeigniter.com/userguide3/general/styleguide.html), which is
essentially the [Allman indent style](https://en.wikipedia.org/wiki/Indent_style#Allman_style), underscores and readable operators. This makes certain that all code is the same format as the existing code and means it will be as readable as possible.

### 3.0 Documentation

I have started a github wiki for documentation on the project. Feel free to add to the documentation as needed.

### 4.0 Compatibility

CodeIgniter recommends PHP 5.5 or newer to be used, but it should be
compatible with PHP 5.2.4 so all code supplied must stick to this
requirement. If PHP 5.3 (and above) functions or features are used then
there must be a fallback for PHP 5.2.4.

### 5.0 Branching

If you're interested in learning github, a basic starter is here: 
https://lab.github.com/githubtraining/introduction-to-github

Also this (more advanced) tutorial takes developers through the basic release workflow this repository incorporates. I have been influenced by other github sources however, so don't take this as the "one true source" of information for git flow.
https://lab.github.com/githubtraining/create-a-release-based-workflow

## 6.0 Issues


If you plan to contribute a change based on an open issue, please assign yourself by commenting on the following word `.take`. Issues that are not assigned are assumed open, and to avoid conflicts, please assign yourself before beginning work on any issues.	If you plan to contribute a change based on an open issue, please assign yourself by commenting on the following word `.take`. Issues that are not assigned are assumed open, and to avoid conflicts, please assign yourself before beginning work on any issues.

## 7.0 Recommended Communication Style

1. Always leave screenshots for visuals changes
1. Always leave a detailed description in the Pull Request. Leave nothing ambiguous for the reviewer.
1. Always review your code first. Do this by leaving comments in your coding noting questions, or interesting things for the reviewer.
1. Always communicate. Whether it is in the issue or the pull request, keeping the lines of communication helps everyone around you.
## 8.0 PR Validation
Examples for valid PR titles:

- fix: Correct typo.
- feat: Add support for Node 12.
- refactor!: Drop support for Node 6.

_Note that since PR titles only have a single line, you have to use the ! syntax for breaking changes._

See [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/) for more examples.

### Work in progress
Github has support for draft pull requests, which will disable the merge button until the PR is marked as ready for merge.

## 9.0 Setup (forks are preferred).

1. [Set up Git](https://help.github.com/en/articles/set-up-git) (Windows, Mac & Linux)
1. Go to the [CodeIgniter repo](https://github.com/bcit-ci/CodeIgniter)
1. [Fork it](https://help.github.com/en/articles/fork-a-repo)
1. [Clone](https://help.github.com/en/articles/fetching-a-remote#clone) your forked CodeIgniter repo: git@github.com:<your-name>/CodeIgniter.git.
1. Checkout the "release-v1.0" branch. At this point you are ready to start making changes.
1. Next create a new branch with "git checkout -b <branch_name>"
1. Fix existing bugs on the Issue tracker after taking a look to see nobody else is working on them.
1. [Commit](https://help.github.com/en/articles/adding-a-file-to-a-repository-using-the-command-line) the files
1. [Push](https://help.github.com/en/articles/pushing-to-a-remote) your new branch to your fork
1. [Send a pull request](https://help.github.com/en/articles/creating-a-pull-request)


For more detailed instructions see the README.md under the install section.

## 10.0 Testing

PHP Unit testing is done in the "test" folder under myapp. To run the tests, in the container, type the following command:

```
docker exec -it virtual-wellness-open-source_myapp_1 ./vendor/bin/phpunit test
```

## 11.0 Setup Debugger

Right now the debugger has just been setup with PHPSTORM on my machine. Using the quick connect functions
should enable the debugger, assuming you are looking for the IDEKEY=PHPSTORM.

TODO: Detailed Instructions for debugger (needs help)

## Spinning down the site

```sh
$ docker-compose down
```

## Additional Useful Commands

```sh
$ docker-compose ps
$ docker-compose log <container_name>
```

## 12.0 Pull Requests

### _We actively welcome your pull requests, however linking your work to an existing issue is preferred._

1. Fork the repo and create your branch from `main`.
1. Name your branch something that is descriptive to the work you are doing. i.e. feat: new thing or fix: fix responsiveness
1. If you've added code that should be tested, add tests.
1. If you've changed APIs, update the documentation.
1. If you make visual changes, screenshots are required.
1. Ensure the test suite passes.
1. Make sure you address any lint warnings.
1. If you make the existing code better, please let us know in your PR description.
1. A PR description and title are required. 
1. [Link to an issue](https://help.github.com/en/github/writing-on-github/autolinked-references-and-urls) in the project. Unsolicited code is welcomed, but an issue is required to announce your intentions. PR's without a linked issue will be marked invalid and closed.

*note for maintainers: All pull requests need a label to assist automation. See the [template](https://github.com/open-sauced/open-sauced/blob/HEAD/.github/release-drafter.yml) to guide which labels to use.*

## 13.0 Coding Tips
- Ask questions if you are stuck. 
- Use [CSS variables](https://github.com/open-sauced/open-sauced/blob/HEAD/src/styles/variables.js)
- Always use [rel="noreferrer" on all target="_blank" links](https://web.dev/external-anchors-use-rel-noopener/). 

## 14.0 License

By contributing to the VWS project, you agree that your contributions will be licensed
under its [MIT license](LICENSE).

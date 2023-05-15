# Help
TARGETS:=$(MAKEFILE_LIST)

define printSection
	@printf "\033[36m\n==================================================\033[0m\n"
	@printf "\033[36m $1 \033[0m"
	@printf "\033[36m\n==================================================\033[0m\n"
endef

.PHONY: help
help: ## This help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(TARGETS) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: unit
unit: ## Runs unit tests
	$(call printSection,PHP UNIT)
	vendor/bin/phpunit tests

.PHONY: static
static: ## Runs static analysis
	$(call printSection,PHP STAN ANALYSIS)
	vendor/bin/phpstan analyse src tests

.PHONY: coverage
coverage: ## Generates code coverage
	$(call printSection,UNIT TESTS COVERAGE REPORTING)
	XDEBUG_MODE=coverage vendor/bin/phpunit tests --coverage-html reports/coverage

.PHONY: cs
cs: ## Checks the codestyle
	$(call printSection,CODE STYLE CHECKING)
	vendor/bin/phpcs -s

.PHONY: cs-fix
cs-fix: ## Automatically fixes the code style whenever possible
	$(call printSection,CODE STYLE FIXING)
	vendor/bin/phpcbf

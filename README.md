# Ramsey UUID 2.x bridge

This tiny package allow you to use `ramsey/uuid: ^3.0` library
even if one of your composer dependencies requires `ramsey/uuid: 2.*`.

## Usage

Add this dependencies in your composer.json requires section:

```json
"mattketmo/uuid-2x-bridge": "*@dev"
```

Then you will be able to update `ramsey/uuid` to `^3.0`.

## License

This package is released under the MIT License.
See the [bundled LICENSE file](LICENSE) for details.

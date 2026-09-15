# iyo-block-code-renderer-scratch
WordPress Plugin for Visualizing Scratch Codes

## Usage
Write Scratch codes within `class="scratchblocks"`.
```php
<div class="scratchblocks">
...
</div>
```

## Notice
Please change `<` or `>` to `&lt;` or `&gt;` manually.

## Releasing

1. Bump the version number in `iyo-block-code-renderer-scratch.php` (`Version:` header) and `readme.txt` (`Stable tag:`), and add a changelog entry to `readme.txt`.
2. Commit the version bump and push to `main`.
3. Tag the release and push the tag:
   ```sh
   git tag vX.Y.Z
   git push origin vX.Y.Z
   ```
4. Create a GitHub release for the tag:
   ```sh
   gh release create vX.Y.Z --title "vX.Y.Z" --notes "..."
   ```
5. Build the distributable zip in a clean staging directory, including only the files needed at runtime (`iyo-block-code-renderer-scratch.php`, `readme.txt`, `LICENSE`, `assets/`) — excluding development-only files such as `composer.json`, `composer.lock`, `vendor/`, and `.git`:
   ```sh
   mkdir -p /tmp/build/iyo-block-code-renderer-scratch
   cp iyo-block-code-renderer-scratch.php readme.txt LICENSE /tmp/build/iyo-block-code-renderer-scratch/
   cp -R assets /tmp/build/iyo-block-code-renderer-scratch/
   cd /tmp/build && zip -r -X iyo-block-code-renderer-scratch-X.Y.Z.zip iyo-block-code-renderer-scratch -x "*.DS_Store"
   ```
6. Attach the zip to the GitHub release as a binary asset (do not commit build zips into the repository):
   ```sh
   gh release upload vX.Y.Z /tmp/build/iyo-block-code-renderer-scratch-X.Y.Z.zip
   ```

The same zip can be used both as the plugin download for users and as the file uploaded when submitting to the WordPress.org Plugin Directory.

## References
[Block Plugin/Syntax - Scratch Wiki](https://en.scratch-wiki.info/wiki/Block_Plugin/Syntax)

[Make pictures of Scratch blocks from text.](https://github.com/scratchblocks/scratchblocks)

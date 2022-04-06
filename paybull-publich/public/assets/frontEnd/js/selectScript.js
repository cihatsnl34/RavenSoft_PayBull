//Select
function selectLink(version) {
  let versionLink = document.getElementById(`${version}`);
  if (versionLink.value === "") {
    return null;
  }
  location.href = versionLink.value;
}

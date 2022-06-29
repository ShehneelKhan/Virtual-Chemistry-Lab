using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ChangeSizeWireGuaze : MonoBehaviour
{
    // Specifying when object is dragged
    void OnMouseDown() {
      transform.localScale = new Vector3 (0.5f,0.3f,0);

        }
}
